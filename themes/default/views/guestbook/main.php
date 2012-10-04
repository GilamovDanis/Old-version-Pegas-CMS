<h2>Гостевая книга</h2> <br />
<div class="post">
	<?php foreach ($messages as $message) { ?>
	<?php if($message->id%2==0) { ?>
	<div class="post_1">
	<?php } else { ?>
	<div class="post_2">
	<?php } ?>
		<div class="post_title">
		<?php echo $message->name; ?>
			<?php if(Auth::instance()->logged_in('admin')) { ?>
			<?php echo HTML::anchor('/guestbook/delete/'.$message->id, ' [delete]'); ?>
			<?php } ?>
		</div>
		<div class="post_content">
		<?php echo $message->content ?>
		</div>
	</div>
	<?php } ?>
</div>
<?php echo $pagination ?>
<?php echo View::factory('/guestbook/add'); ?>