<div id="content">
<div class="content-title">Гостевая книга</div>
<div class="links">
<?php echo HTML::image('themes/default/icons/refresh.png', array('alt' => 'img','style'=>'vertical-align:middle')); ?> <?php echo HTML::anchor('/guestbook/', 'Обновить'); ?>
</div>

<table class="post">
	<?php foreach ($messages as $message) { ?>
	<?php if($message->id%2==0) { ?>
	<tr class="post1">
	<?php } else { ?>
	<tr class="post2">
	<?php } ?>
		<td width="54">
		<?php echo HTML::image('themes/default/icons/ava.png', array('alt' => 'Аватар')) ?>
		</td>
		<td width="520">
		<div class="post_title">
		<b><?php echo $message->name; ?></b> - <?php echo Date::timef($message->created)?>
		</div>
		<div class="post_content">
		<?php echo $message->content ?>
		</div>
			<?php if(Auth::instance()->logged_in('admin')) { ?>
			<?php echo HTML::anchor('/guestbook/delete/'.$message->id, ' [delete]'); ?>
			<?php } ?>
		</td>
	</tr>
	<?php } ?>
</table>
<?php echo $pagination ?> <br />
<?php echo View::factory('/guestbook/add'); ?>
</div>