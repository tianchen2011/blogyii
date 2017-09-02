<?php 
namespace app\controllers;

use Yii;
use app\models\Comment;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\Reply;

class CommentsController extends Controller{

	public function actionAdd($art_id){
		$comment = new Comment();
		// if ($model->load(Yii::$app->request->post()) && $model->save()) {
  //           return $this->redirect(['art/item', 'art_id'=>$comment->art_id]);
  //       }
		$comment->art_id = $art_id;
		$comment->comment = Yii::$app->request->post('comment');
		if ($comment->save()) {
			return $this->redirect(['art/item','art_id'=>$comment->art_id]);
		}
		echo "string";
	}
}

