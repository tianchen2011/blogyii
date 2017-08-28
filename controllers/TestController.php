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
}