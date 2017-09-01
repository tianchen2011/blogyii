<?php
/* @var $this yii\web\View */
use yii\widgets\LinkPager;
use yii\helpers\Url;
use yii\helpers\Html;
$this->title = '博客首页';
$this->params['breadcrumbs'][] = $this->title;
?>
<h1>博客</h1>
<div class="panel panel-default">
	<div class="panel-heading">博客</div>
	<div class="panel-body">
<?php foreach ($models as $model) {?>
  	<div class="media">
    <div class="media-body">
    <h4 class="media-heading">
    <a href="<?php echo Url::toRoute(['art/item', 'art_id' => $model->art_id]); ?>">
    <?php echo $model->title; ?>
    </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </h4>
    <p><?php echo substr($model->content,0,250)."......"; ?></p>
  </div>
</div>
<?php
	}
	echo LinkPager::widget(['pagination' => $pages,]);
?>
 </div>
</div>