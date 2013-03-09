<div class="span12">
<h4><i class="icon-forward"></i> Статьи</h4>

<table class="table table-striped table-bordered">
<?php 
foreach ($messages as $message) { 
	$category_url=$message->category->find()->category_url;
	$path='/blog/'.$category_url.'/'.$message->post_url;
?>
	
	<tr>
		<td width="50">
		<?php echo HTML::image('themes/default/icons/blog48.png', array('alt' => 'img','style'=>'vertical-align:center')) ?>
		</td>
		
		<td>
		<p>
		<strong><?php echo HTML::anchor($path, $message->title); ?></strong> - <?php echo Date::timef($message->created)?>
		</p>
		<p>
		<?php echo Text::auto_p(Text::pagebreak($message->content,array('link'=>$path))); ?>
		</p>
		</td>
	</tr>
<?php } ?>
</table>
<?php echo $pagination ?>
</div>

<hr>

<div class="span12">
<?php
if(Auth::instance()->logged_in('admin')) { 
?>
<div class="nav-links">
<?php
echo HTML::image('themes/default/icons/blog.png', array('alt' => 'img','style'=>'vertical-align:center')); echo HTML::anchor('/blog/post/add', ' Добавить статью'); 
?>
<br />
<?php
echo HTML::image('themes/default/icons/blog.png', array('alt' => 'img','style'=>'vertical-align:center')); echo HTML::anchor('/blog/category/add', ' Добавить категорию'); 
?>
</div>
<?php } ?>
</div>