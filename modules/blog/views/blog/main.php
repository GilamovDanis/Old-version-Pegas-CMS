<div class="span12">
<h3>Блоги</h3>

<table class="table table-striped table-bordered">
	<?php foreach ($messages as $message) { 
	$category_url=$message->category->where('type','=','main')->find()->category_url;
	$path='/blog/'.$category_url.'/'.$message->post_url.'.html';
	?>
	<tr>
		<td width="60">
		<?php echo HTML::image('themes/default/icons/blog48.png', array('alt' => 'Блоги')) ?>
		</td>
		<td>
		<p>
		<strong><?php echo HTML::anchor($path, $message->title); ?></strong> - <?php echo Date::timef($message->created)?>
		</p>
		<p>
		<?php 
			 echo Text::auto_p(Text::pagebreak($message->content,array('link'=>$path)));
		?>
		</p>
		</td>
	</tr>
	<?php } ?>
</table>
<?php echo $pagination ?>

<div class="nav-links">
<?php
if(Auth::instance()->logged_in('admin')) { 
echo HTML::image('themes/default/icons/blog.png', array('alt' => 'img','style'=>'vertical-align:middle')); echo HTML::anchor('/blog/post/add', ' Добавить статью'); 
} ?>
</div>
</div>