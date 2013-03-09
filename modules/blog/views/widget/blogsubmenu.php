<div class="subnav">
    <ul class="nav nav-pills">
	<li><a href="/blog/category/all">Все</a></li>
	<?php 
	$category_list_top=$category_list->where('category_id','=',0)->order_by('post_count','DESC')->limit(6)->find_all();
	
	  foreach ($category_list_top as $category_top) {
	  $category_list_bot=$category_list->where('category_id','=',$category_top->id)->order_by('post_count','DESC')->find_all();

		?>
			 <li class="dropdown">
				  <?php echo HTML::anchor('/blog/'.$category_top->category_url, $category_top->title.' <b class="caret"></b>',array('class'=>'dropdown-toggle', 'data-toggle'=>'dropdown')); ?> 
				  <ul class="dropdown-menu">
				  <li><?php echo HTML::anchor('/blog/'.$category_top->category_url, $category_top->title); ?></li>
				  <li class="divider"></li>
				   <?php 
				  foreach ($category_list_bot as $category_bot) {  ?>
				   <li><?php echo HTML::anchor('/blog/'.$category_bot->category_url, $category_bot->title); ?></li>
				  <?php } ?> 
				  </ul>
			</li>
<?php } ?>
    </ul>
</div>