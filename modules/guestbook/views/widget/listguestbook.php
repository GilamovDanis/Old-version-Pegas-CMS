<h2>Гостевая книга</h2> <br />

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
		</td>
	</tr>
	<?php } ?>
</table> <br />