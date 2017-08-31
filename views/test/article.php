<?php 
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$form = ActiveForm::begin([
		'id'=> 'article',
		'method' => 'post',
		 'options' => ['class' => 'form-horizontal'],
	])
 ?>
<?= $form->field($model,'title')->textInput(['maxlength' => true]) ?>
<?= $form->field($model,'content')->textarea(['rows' => 6]) ?>
<div class="form-group">	
    <div class="col-lg-offset-1 col-lg-11">
        <?= Html::submitButton('提交', ['class' => 'btn btn-primary']) ?>
    </div>
</div>
<?php ActiveForm::end();?> 
