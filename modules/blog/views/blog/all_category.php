<div class="span12">
<h4><i class="icon-forward"></i> Все Категории</h4>

<table class="table table-striped table-condesed table-bordered">
<?php 
$messages_top=$messages->where('category_id','=',0)->order_by('post_count','DESC')->find_all();

foreach ($messages_top as $message_top) { 
	$messages_bot=$messages->where('category_id','=',$message_top->id)->order_by('post_count','DESC')->find_all();
	$path='/blog/'.$message_top->category_url;
		if (!$message_top->category_id) {
		?>
		<tr>
			<td width="50">
			<?php echo HTML::image('themes/default/icons/top.png', array('alt' => 'img','style'=>'vertical-align:center')) ?>
			</td>
			
			<td>
			<p>
			<strong><?php echo HTML::anchor($path, $message_top->title); ?></strong> - <?php echo Date::timef($message_top->created)?>
			</p>
			<p>
			<?php echo Text::auto_p(Text::pagebreak($message_top->content,array('link'=>$path))); ?>
			</p>
			</td>
		</tr>
		<?php 
		}
		
		  foreach ($messages_bot as $message_bot) {
		   $path='/blog/'.$message_bot->category_url;
		   ?>
		   <tr>
			<td width="30">
			<?php echo HTML::image('themes/default/icons/bot.png', array('alt' => 'img','style'=>'vertical-align:center')) ?>
			</td>
			<td>
			<p>
			<small><strong>Подкатегория - <?php echo HTML::anchor($path, $message_bot->title); ?></strong> - <?php echo Date::timef($message_bot->created)?></small>
			</p>
			<p>
			<small><?php echo Text::auto_p(Text::pagebreak($message_bot->content,array('link'=>$path))); ?></small>
			</p>
			</td>
		   </tr>
		   <?php
		  } 
}
?>
</table>
</div>

<hr>

<div class="span12">
<?php
if(Auth::instance()->logged_in('admin')) { 
?>
<div class="nav-links">
<?php
echo HTML::image('themes/default/icons/blog.png', array('alt' => 'img','style'=>'vertical-align:center')); echo HTML::anchor('/blog/category/add', ' Добавить категорию'); 
?>
</div>
<?php } ?>
</div>