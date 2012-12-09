<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8" />
  <title>Ошибка HTTP 404</title>
  <?php 
   echo HTML::style('themes/default/css/main.css');
  ?>
 </head> 
 <body>
 <div id="container">
  <header id="header">	
		<h1>PEGAS <span>CMS</span></h1>
		<p>Based on <?php echo Kohana::version() ?></p>	
		<?php echo Widget::load('TopMenu'); ?>
  </header>

  <div id="post">
    <div style="text-align:center;">
	<h2><?php echo $message?></h2>
	<?php echo HTML::image('media/images/404.jpg', array('alt' => '404')) ?> <br />
	<h4>Ошибка 404 или Not Found («не найдено») стандартный код ответа HTTP о том, что клиент был в состоянии общаться с сервером, но сервер не может найти данные согласно запросу.</h4> <br />
	</div>
  </div>
	
  <footer id="footer">
	&copy; <?php echo HTML::anchor('/#', 'Pegas CMS'); ?> 2011-<?php echo date('Y'); ?> г
  </footer>
 
</div>
</body> 
</html>