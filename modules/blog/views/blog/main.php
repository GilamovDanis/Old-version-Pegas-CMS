<h2>Блоги</h2> <br />

<table>
	<?php foreach ($messages as $message) { 
	$category_url=$message->category->where('type','=','main')->find()->category_url;
	$path='/blog/'.$category_url.'/'.$message->post_url.'.html';
	
	if($message->id%2==0) { 
	?>
	<tr class="post1">
	<?php } else { ?>
	<tr class="post2">
	<?php } ?>
		<td width="55">
		<?php echo HTML::image('themes/default/icons/blog48.png', array('alt' => 'Блоги')) ?>
		</td>
		<td width="915">
		<div class="post_title">
		<b><?php echo HTML::anchor($path, $message->title); ?></b> - <?php echo Date::timef($message->created)?>
		</div>
		<div class="post_content">
		<?php 
		
			 if (UTF8::strlen($message->content)>256) { 
			 $message->content=UTF8::substr($message->content,0,256);
			 echo Text::auto_p($message->content).'.. <br /> &raquo;  ';
			 echo HTML::anchor($path, 'Читать полностью');
			 } else {
			 echo Text::auto_p($message->content);
			 }
		?>
		</div>
		</td>
	</tr>
	<?php } ?>
</table>
<?php echo $pagination ?> <br />

<div class="links">
<?php
if(Auth::instance()->logged_in('admin')) { 
echo HTML::image('themes/default/icons/blog.png', array('alt' => 'img','style'=>'vertical-align:middle')); echo HTML::anchor('/blog/add', 'Добавить статью'); 
} ?>
</div>