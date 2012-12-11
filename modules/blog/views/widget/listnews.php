<h2>Новости сайта</h2> <br />

<table>
	<?php foreach ($messages as $message) { ?>
	<?php if($message->id%2==0) { ?>
	<tr class="post1">
	<?php } else { ?>
	<tr class="post2">
	<?php } ?>
		<td width="55">
		<?php echo HTML::image('themes/default/icons/news48.png', array('alt' => 'Новости')) ?>
		</td>
		<td width="915">
		<div class="post_title">
		<b><?php echo $message->title; ?></b> - <?php echo Date::timef($message->created)?>
		</div>
		<div class="post_content">
		<?php if (UTF8::strlen($message->content)>256) { 
			 $message->content=UTF8::substr($message->content,0,256);
			 
		     $url=HTML::anchor('/news/view/'.$message->id, 'Читать полностью');
			 echo Text::auto_p($message->content).'.. <br /> &raquo;  '.$url;
			 } else {
			 echo Text::auto_p($message->content);
			 }
		?>
		</div>
		</td>
	</tr>
	<?php } ?>
</table>
<br />