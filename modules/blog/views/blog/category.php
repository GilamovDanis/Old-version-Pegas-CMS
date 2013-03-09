<div class="span12">
<h4><i class="icon-forward"></i> Статьи - <?php echo $category->title?></h4>

<table class="table table-striped table-condesed table-bordered">
<?php 
foreach ($messages as $message) { 
	$path='/blog/'.$category->category_url.'/'.$message->post_url;
?>
	
	<tr>
		<td>
		<p>
		<strong><?php echo HTML::anchor($path, $message->title); ?></strong> - <?php echo Date::timef($message->created)?>
		</p>
		<p>
		<?php echo Text::auto_p(Text::pagebreak($message->content,array('link'=>$path))); ?>
		</p>
		
		</td>
	</tr>
<?php } ?>
</table>
<?php echo $pagination ?>

<hr>


<?php
if(Auth::instance()->logged_in('admin')) { 
?>
<div class="nav-links">
<?php
echo HTML::image('themes/default/icons/blog.png', array('alt' => 'img','style'=>'vertical-align:center')); echo HTML::anchor('/blog/category/delete/'.$category->id, ' Удалить категорию',array('onclick'=>"return confirm('Вы точно хотите удалить категорию.Вместе во всем статьми?')")); 
?>
</div>
<?php } ?>
</div>