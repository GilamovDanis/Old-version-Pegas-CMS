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
		<b><?php echo HTML::anchor('/news/view/'.$message->id, $message->title); ?></b> - <?php echo Date::timef($message->created)?>
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
<?php echo $pagination ?> <br />

<div class="links">
<?php 
echo HTML::image('themes/default/icons/rss.png', array('alt' => 'img','style'=>'vertical-align:middle')); 
echo HTML::anchor('/news/rss', 'Подписка по RSS');
?> <br /> <?php
if(Auth::instance()->logged_in('admin')) { 
echo HTML::image('themes/default/icons/news.png', array('alt' => 'img','style'=>'vertical-align:middle')); echo HTML::anchor('/news/add', 'Добавить новость'); 
} ?>
</div>