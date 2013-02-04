<h3>Новости сайта</h3>

<table class="table table-striped table-bordered">
	<?php foreach ($messages as $message) { ?>
	<tr>
		<td width="60">
		<?php echo HTML::image('themes/default/icons/news48.png', array('alt' => 'Новости')) ?>
		</td>
		<td>
		<p>
		<strong><?php echo $message->title; ?></strong> - <?php echo Date::timef($message->created)?>
		</p>
		<p>
		<?php 
		echo Text::auto_p(Text::pagebreak($message->content,array('link'=>'/news/view/'.$message->id)));
		?>
		</p>
		</td>
	</tr>
	<?php } ?>
</table>