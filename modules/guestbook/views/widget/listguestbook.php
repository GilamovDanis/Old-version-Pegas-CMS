<h3>Гостевая книга</h3>

<table class="table table-striped table-bordered">
	<?php foreach ($messages as $message) { ?>
	<tr>
		<td width="60">
		<?php echo HTML::image('themes/default/icons/ava.png', array('alt' => 'Аватар')) ?>
		</td>
		<td>
		<p>
		<strong><?php echo $message->username; ?></strong> - <?php echo Date::timef($message->created)?>
		</p>
		<p>
		<?php echo Text::auto_p($message->content) ?>
		</p>
		</td>
	</tr>
	<?php } ?>
</table> 