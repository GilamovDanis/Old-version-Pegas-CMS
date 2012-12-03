<?php 
/**
 * Вывод сообщений
**/
if (!empty($message)) {
?>
<div class="post_message">
<?php
	if (is_array($message)) {
		foreach ($message as $messages) {
			if (is_array($messages)) {
				foreach ($messages as $messagess) {
				?>
				<span><?php echo $messagess; ?></span> <br />
				<?php 
				}
			} else { ?>
			<span><?php echo $messages; ?></span> <br />
			<?php  } 
	    }
	}  else { ?>
	<span><?php echo $message; ?></span>
	<?php } ?>
</div>

<?php
}