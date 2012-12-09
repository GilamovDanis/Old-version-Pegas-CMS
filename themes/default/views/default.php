<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8" />
  <title><?php echo $title ?></title>
  <meta name="keywords" content="<?php echo $keywords ?>" />
  <meta name="description" content="<?php echo $description ?>" />
  <?php 
   echo HTML::style('themes/default/css/main.css');
   echo HTML::style('themes/default/css/form.css');
   echo HTML::style('themes/default/css/post.css');
  ?>
 </head> 
 <body>
 <div id="container">
  <header id="header">	
		<h1>PEGAS <span>CMS</span></h1>
		<p>Based on <?php echo Kohana::version() ?></p>	
		<?php echo Widget::load('TopMenu'); ?>
  </header>
	<?php if ($fullcontent) { ?>
	
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
			echo Widget::load('RightSidebar'); 
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