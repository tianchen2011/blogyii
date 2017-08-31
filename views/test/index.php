<?php

use yii\helpers\Html;
use yii\widgets\DetailView;


$this->title = '文章';
$this->params['breadcrumbs'][] = $this->title;
$this->params['breadcrumbs'][] = ['label' => 'Articles', 'url' => ['index']];
?>
<div class="article-index">

    <h1><?= Html::encode($this->title) ?></h1>
  

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            'content:ntext',
        ],
    ]) ?>
</div>
