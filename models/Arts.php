<?php

namespace app\models;

use Yii;
use yii\db\Expression;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "arts".
 *
 * @property integer $art_id
 * @property integer $cat_id
 * @property string $title
 * @property string $content
 * @property integer $pubtime
 */
class Arts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'arts';
    }

    public function behaviors()
{
    return [
        [
            'class' => TimestampBehavior::className(),
            'createdAtAttribute' => 'pubtime',
            'updatedAtAttribute' => 'update_time',
            'value' => new Expression('NOW()'),
        ],
    ];
}

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cat_id', 'title'], 'required'],
            [['cat_id'], 'integer'],
            [['content'], 'string'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'art_id' => '文章ID',
            'cat_id' => '栏目',
            'title' => '标题',
            'content' => '内容',
            'pubtime' => '添加时间',
        ];
    }
}
