<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Arts */

$this->title = '修改文章';
$this->params['breadcrumbs'][] = ['label' => 'Arts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->art_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="arts-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
