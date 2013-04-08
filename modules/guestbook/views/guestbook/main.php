<div class="span8">
<h3>Гостевая книга</h3>

<div class="nav-links">
<?php echo HTML::image('themes/default/icons/refresh.png', array('alt' => 'img','style'=>'vertical-align:middle')); ?> <?php echo HTML::anchor('/guestbook/', 'Обновить'); ?>
</div>

<table class="table table-striped table-condesed table-bordered">
	<?php foreach ($messages as $message) { ?>
	<tr>
		<td width="60">
		<?php echo HTML::image('themes/default/icons/ava.png', array('alt' => 'Аватар')) ?>
		</td>
		<td>
		<p>
		<?php if(!Model_Guestbook::unique_key($message->username)) { ?>
		<strong><?php echo HTML::anchor('/user/'.$message->username, $message->username); ?></strong> 
		<?php } else { ?>
		<strong><?php echo $message->username; ?></strong>
		<?php } ?>
		- <?php echo Date::timef($message->created)?>
		</p>
		<p>
		<?php echo Text::auto_p($message->content) ?>
		</p>
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
</div>

<div class="span4">
<?php echo View::factory('/guestbook/sidebar'); ?>
</div>