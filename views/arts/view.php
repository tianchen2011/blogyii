<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Arts */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Arts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="arts-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('修改', ['update', 'id' => $model->art_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除', ['delete', 'id' => $model->art_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '确定要删除此文章吗?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'art_id',
            'cat_id',
            'title',
            'content:ntext',
            'pubtime:datetime',
        ],
    ]) ?>

</div>
