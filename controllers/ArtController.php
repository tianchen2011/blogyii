<?php

namespace app\controllers;

use app\models\Arts;
use yii\data\Pagination;
use app\models\Cats;
use app\models\Comment;

class ArtController extends \yii\web\Controller
{
     public function actionIndex()
    {
    	$arts = Arts::find()->where(['and','cat_id>0','cat_id>0']);
    	$count = Arts::find()->count();
        $pages = new Pagination(['totalCount' => $count,'pageSize'=>5]);
        $models = $arts->offset($pages->offset)
        ->limit($pages->limit)
        ->all();
       return $this->render('index', [
         'models' => $models,
         'pages' => $pages,
       ]);
    }

    public function actionItem($art_id)
    {
    	$art = Arts::findOne($art_id);
        //获得该文章所有 status 为 1 的评论
        $comments = Comment::findAll(['art_id'=>$art_id,'status'=>1]);
        $replys = array();
        foreach ($comments as $comment) {
            //根据评论 id 查找所有 status 为 1 的回复，并赋值给$replys数组，
            $replys[$comment->id] = Reply::findAll(['comment_id' => $comment->id,'status' => 1]);
        }
        return $this->render('item',['art'=>$art,'comments'=>$comments,'replys'=>$replys]);
    }

}
