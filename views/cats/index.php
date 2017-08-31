<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CatsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '栏目列表';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cats-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('添加栏目', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'cat_id',
            'catname',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
