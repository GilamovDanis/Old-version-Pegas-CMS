<div class="span12">
<h3>Пользователи</h3> 

<table class="table table-striped table-condesed table-bordered">
	<?php foreach ($messages as $message) { ?>
	<tr>
		<td width="60">
		<?php echo HTML::image('themes/default/icons/ava.png', array('alt' => 'Аватар')) ?>
		</td>
		<td>
		<p>
		<strong><?php echo HTML::anchor('/user/'.$message->username, $message->username) ?></strong> <br />
		Последняя авторизация: <?php echo Date::timef($message->last_login)?>
		</p>
		</td>
		<td>
		<?php
			echo HTML::anchor('/apanel/user/delete/'.$message->id, ' Удалить',array('onclick'=>"return confirm('Вы точно хотите удалить пользователя?')")); 
		?> <br />
		<?php
			echo HTML::anchor('/user/edit/'.$message->id, ' Редактировать',array('onclick'=>"return confirm('Вы точно хотите редактировать пользователя?')")); 
		?>
		</td>
	</tr>
	<?php } ?>
</table>
<?php echo $pagination ?> <br />

<div class="nav-links">
<i class="icon-tags"></i><?php echo HTML::anchor('apanel/', ' Apanel')?>
</div>
</div>