<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8" />
  <title><?php echo $title ?></title>
  <meta name="keywords" content="<?php echo $keywords ?>" />
  <meta name="description" content="<?php echo $description ?>" />
  <?php 
  foreach($styles as $style) {
   echo HTML::style('themes/default/css/'.$style.'.css');
  } 
  /*
  foreach($scripts as $script) {
   echo HTML::script('themes/default/css/'.$script.'.js');
  } 
  */
  ?>
 </head> 
 <body>
 <div id="container">
  <header id="header">	
		<h1>PEGAS <span>CMS</span></h1>
		<p>Based on framework Kohana 3.2</p>	
		<?php echo View::factory('/main/topmenu');  ?>
  </header>
 
	<?php if (!$fullcontent) { ?>
	
		<div id="post">
		<?php 
		echo View::factory('/main/error'); 
		echo View::factory('/main/message'); 
		if(!empty($content))echo $content; 
		?>
		</div>
 
	<?php } else { ?>
			<div id="content">
		
				<div id="post">
				<?php 
				echo View::factory('/main/error'); 
				echo View::factory('/main/message'); 
				if(!empty($content))echo $content; 
				?>
				</div>
		
			</div>
			
			<div id="sidebar">
			<?php 
			if(empty($sidebarcontent)) { 
			echo View::factory('/main/sidebar'); 
			} else {
			echo $sidebarcontent;
			}
			?>
			</div>
	<?php } ?>
	
  <footer id="footer">
	&copy; <?php echo HTML::anchor('/#', 'Pegas CMS'); ?> 2011-<?php echo date('Y'); ?> г
  </footer>
 
</div>
</body> 
</html>