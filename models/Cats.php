<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cats".
 *
 * @property integer $cat_id
 * @property string $catname
 */
class Cats extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cats';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['catname'], 'required'],
            [['catname'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cat_id' => '栏目ID',
            'catname' => '栏目名称',
        ];
    }
}
