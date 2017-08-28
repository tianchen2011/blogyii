<?php 
namespace app\controllers;

use Yii;
use yii\web\Controller;


class TestController extends Controller{
	public function actionTest333(){
		$aname = Yii::$app->controller->action->id;
		$cname = Yii::$app->controller->id; 
		echo "$cname====$aname";
	}

	public function actionArticle(){
		$a = Yii::$app->controller->action->id;
		$b = Yii::$app->controller->id;
		return $this->render('article',['a'=>$a,'b'=>$b]);
	}
}