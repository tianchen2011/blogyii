<?php 
namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\web\models;
use yii\base\Object;
use app\models\Isort;
use app\models\Fost;
use app\models\Sort;


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

	public function actionSort(){
		$array = ['5','1','3','9','4'];
		$array = Sort::setArray($array);
		var_dump($array);
	}
}