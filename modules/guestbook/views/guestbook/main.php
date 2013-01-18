<h2>Гостевая книга</h2> <br />

<div class="links">
<?php echo HTML::image('themes/default/icons/refresh.png', array('alt' => 'img','style'=>'vertical-align:middle')); ?> <?php echo HTML::anchor('/guestbook/', 'Обновить'); ?>
</div>

<table>
	<?php foreach ($messages as $message) { ?>
	<?php if($message->id%2==0) { ?>
	<tr class="post1">
	<?php } else { ?>
	<tr class="post2">
	<?php } ?>
		<td width="55">
		<?php echo HTML::image('themes/default/icons/ava.png', array('alt' => 'Аватар')) ?>
		</td>
		<td width="615">
		<div class="post_title">
		<b><?php echo $message->username; ?></b> - <?php echo Date::timef($message->created)?>
		</div>
		<div class="post_content">
		<?php echo Text::auto_p($message->content) ?>
		</div>
			<?php
			if(Auth::instance()->logged_in('admin')) { 
			echo HTML::anchor('/guestbook/delete/'.$message->id, ' Удалить',array('onclick'=>"return confirm('Вы точно хотите удалить сообщение?')")); 
			} ?>
		</td>
	</tr>
	<?php } ?>
</table>
<?php echo $pagination ?> <br />
<?php echo View::factory('/guestbook/add'); ?>