<?php 
namespace app\controllers;

use Yii;
use app\models\Article;
use app\models\ArticleSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;


class TestController extends Controller{
	public function actionTest333(){
		$aname = Yii::$app->controller->action->id;
		$cname = Yii::$app->controller->id; 
		echo "$cname====$aname";
	}

	// public function actionArticle(){
	// 	$a = Yii::$app->controller->action->id;
	// 	$b = Yii::$app->controller->id;
	// 	return $this->render('article',['a'=>$a,'b'=>$b]);
	// }

	public function actionSort(){
		$array = ['5','1','3','9','4'];
		$array = Sort::setArray($array);
		var_dump($array);
	}

	public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }


	public function actionArticle(){
		$model = new Article;

		if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index', 'id' => $model->id]);
        } else {
            return $this->render('article',['model'=>$model]);
        }

	}

	public function actionIndex($id){
		return $this->render('view', [
            'model' => $this->find($id)->one(),
        ]);
	}
}