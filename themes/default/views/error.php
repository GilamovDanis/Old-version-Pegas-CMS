<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8" />
  <title><?php echo $title ?></title>
  <link href="favicon.png" rel="shortcut icon" type="image/x-icon" />
  <link type="text/css" href="/themes/default/css/main.css" rel="stylesheet" />
  <link type="text/css" href="/themes/default/css/form.css" rel="stylesheet" />
  <link type="text/css" href="/themes/default/css/post.css" rel="stylesheet" />
 </head> 
<body>
<div id="container">
  <header id="header">	
		<h1>PEGAS <span>CMS</span></h1>
		<p>Based on framework Kohana 3.2</p>	
		<?php echo View::factory('/main/topmenu');  ?>
  </header>
  
  <div id="content">

	  <div id="post">
	  <h2><?php echo $title?></h2>
	  <p><?php echo $message?></p>
	  &raquo; <?php echo HTML::anchor('/', 'Вернутся на главную'); ?>
	  </div> 
  </div>
  
  <div id="sidebar">
  <h2>Внимание</h2>	
  <p>Если данная ошибка появляется пожалуйста постоянно <br />
  сообщите об этом администрации сайта <br /> <br />
  
  Назовите условия при которых она возникает и код ошибки</p>
  </div>
  
  
  <footer id="footer">
		&copy; <?php echo HTML::anchor('/#', 'Pegas CMS'); ?> 2011-<?php echo date('Y'); ?> г
  </footer>
  
</div>
</body> 
</html>