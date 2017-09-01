<?php
use app\models\Cats;
use yii\helpers\Html;
/* @var $this yii\web\View */
$this->title = $art->title;
$this->params['breadcrumbs'][] = ['label' => 'Arts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
$cat = Cats::find()->where(['cat_id'=>$art->cat_id])->one();
?>
<h1><?php echo  $art->title; ?></h1>
<p class="text-muted">栏目：<?php echo $cat->catname; ?></p>
<p>
    <?php echo yii\helpers\Markdown::process($art->content, 'gfm'); ?>
</p>

<div class="panel panel-default">
  <div class="panel-heading">评论</div>
  <div class="panel-body">
  		<ul class="media-list">
  		<?php $i = 0; foreach ($comments as $comment){     //循环输出所有评论   ?>
 			<li class="media">
   				<div class="media-body">
    			    <h4 class="media-heading"><?php echo '第'.++$i.'楼'; ?></h4>
    				<?php echo yii\helpers\Markdown::process($comment->comment, 'gfm');?>
    			</div>
    		</li>
    			<?php
    				if ($reply = $replys[$comment->id]) {
    					echo "<hr>";
    					foreach ($reply as $reply ) {                 
    					//如果评论有回复，循环输出所有回复
                ?>
    		        <div style="margin-left:30px;">
    		        <?php echo yii\helpers\Markdown::process($reply->reply, 'gfm');?>
    		        </div>

    			<?php }} ?>
                    <a href="javascript:void(0)" onclick="reply(this,<?php echo $comment->id;?>)" style="margin-left:30px;" >回复</a>
                        <hr>
 			<?php } ?>
		</ul>
  </div>
</div>

<?php   //评论表单 ?>
<?= Html::beginForm(['comment/add', 'id' => $art->id], 'art') ?>
<h4>输入评论内容</h4>
<?= \yidashi\markdown\Markdown::widget(['name' => 'comment', 'language' => 'zh'])?>
<br>
<?= Html::submitButton('提交', ['class' => 'btn btn-primary']) ?>

<?= Html::endForm() ?>