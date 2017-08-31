<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Cats;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Arts */
/* @var $form yii\widgets\ActiveForm */
$data = Cats::find()->all();
?>

<div class="arts-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cat_id')->dropDownList(ArrayHelper::map($data,'cat_id','catname')) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? '添加' : '修改', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
