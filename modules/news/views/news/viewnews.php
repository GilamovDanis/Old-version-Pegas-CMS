<h2>Новости сайта</h2> <br />

<table>
	<tr class="post1">
		<td width="55">
		<?php echo HTML::image('themes/default/icons/news48.png', array('alt' => 'Новости')) ?>
		</td>
		<td width="915">
		<div class="post_title">
		<b><?php echo $news->title; ?></b> - <?php echo Date::timef($news->created)?>
		</div>
		<div class="post_content">
		<?php echo Text::auto_p($news->content) ?>
		</div>
		</td>
	</tr>
</table>

<div class="links">
<?php echo HTML::image('themes/default/icons/news.png', array('alt' => 'img','style'=>'vertical-align:middle')); ?> <?php echo HTML::anchor('/news/', 'Новости'); ?>
</div> 