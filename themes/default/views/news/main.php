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
		<?php echo Text::auto_p($message->content) ?>
		</div>
			<?php if(Auth::instance()->logged_in('admin')) { ?>
			<?php echo HTML::anchor('/news/delete/'.$message->id, ' [delete]'); ?>
			<?php } ?>
		</td>
	</tr>
	<?php } ?>
</table>
<?php echo $pagination ?> <br />