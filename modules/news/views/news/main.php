<div class="span12">
<h3>Новости сайта</h3> 

<table class="table table-striped table-bordered">
	<?php foreach ($messages as $message) { ?>
	<tr>
		<td width="60">
		<?php echo HTML::image('themes/default/icons/news48.png', array('alt' => 'Новости')) ?>
		</td>
		<td>
		<p>
		<strong><?php echo HTML::anchor('/news/view/'.$message->id, $message->title); ?></strong> - <?php echo Date::timef($message->created)?>
		</p>
		<p>
		<?php 
			 echo Text::auto_p(Text::pagebreak($message->content,array('link'=>'/news/view/'.$message->id)));
		?>
		</p>
		</td>
	</tr>
	<?php } ?>
</table>
<?php echo $pagination ?> 


<div class="nav-links">
<?php 
echo HTML::image('themes/default/icons/rss.png', array('alt' => 'img','style'=>'vertical-align:middle')); 
echo HTML::anchor('/news/rss', '  Подписка по RSS');
?> <br /> <?php
if(Auth::instance()->logged_in('admin')) { 
echo HTML::image('themes/default/icons/news.png', array('alt' => 'img','style'=>'vertical-align:middle')); echo HTML::anchor('/news/add', '  Добавить новость'); 
} ?>
</div>
</div>