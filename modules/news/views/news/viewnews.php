<div class="span12">
<h3>Новости сайта</h3>

<table class="table table-striped table-bordered">
	<tr>
		<td width="60">
		<?php echo HTML::image('themes/default/icons/news48.png', array('alt' => 'Новости')) ?>
		</td>
		<td>
		<p>
		<strong><?php echo $news->title; ?></strong> - <?php echo Date::timef($news->created)?>
		</p>
		<p>
		<?php echo Text::auto_p($news->content) ?>
		</p>
		</td>
	</tr>
</table>

<div class="links">
<?php 
echo HTML::image('themes/default/icons/news.png', array('alt' => 'img','style'=>'vertical-align:middle')); ?> <?php echo HTML::anchor('/news/', 'Новости'); 
?>
<br />
<?php
if(Auth::instance()->logged_in('admin')) { 
echo HTML::image('themes/default/icons/delete.png', array('alt' => 'img','style'=>'vertical-align:middle')); echo HTML::anchor('/news/delete/'.$news->id, ' Удалить новость',array('onclick'=>"return confirm('Вы точно хотите удалить новость?')")); 
} ?>
</div> 
</div>