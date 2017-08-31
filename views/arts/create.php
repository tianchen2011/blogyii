<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Arts */

$this->title = '文章添加';
$this->params['breadcrumbs'][] = ['label' => 'Arts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="arts-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
