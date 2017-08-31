<?php 
namespace app\models;

use Yii;
use yii\db\ActiveRecord;

class article extends ActiveRecord{

	public static function tableName()
    {
        return 'article';
    }

	public function rules(){
		return [
			['title','required','message'=>'标题不能为空'],
			[['content'], 'string']
		];
	}

	public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => '标题',
            'content' => '文章',
        ];
    }
}