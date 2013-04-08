<!DOCTYPE html>
<html lang="ru">
  <head>
     <meta charset="utf-8" />
	 <title><?php echo $title ?></title>

    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	
	<?php 
	/**
	* Подключение файлов .css
	*/
	foreach($styles as $style) {
		echo HTML::style($style.'.css')."\n";
	} 
	
	/**
	* Подключение файлов .js
	*/
	foreach($jscripts as $jscript) {
		echo HTML::script($jscript.'.js')."\n";
	} 
	?>

  </head>

<body>

<!-- Верхнея навигационная панель -->
<?php echo Widget::load('TopMenu'); ?>
 

<div class="container">
<!-- Заголовок сайта -->

<header class="subhead" id="overview">
  <div class="head-title">
       <h1>PEGAS <span>CMS</span></h1>
	   <p>&nbsp; Based on <?php echo Kohana::version() ?></p>
  </div>
  
  <?php echo Widget::load('AdminSubMenu'); ?>
</header>

<div class="row">
  <!-- Основной блок -->
  <?php 
		echo View::factory('/main/error');
		echo View::factory('/main/message');
		if(!empty($content))echo $content; 
  ?>
</div>



<!-- Footer -->
	  <div class="container">
      <hr>
      <footer id="footer">
        <p class="pull-right"><a href="#">&uarr; Наверх</a></p>
        <p>
		  Админ панель Pegas CMS
        </p>
        <p>
		&copy; <?php echo HTML::anchor('/', 'Админ панель'); ?>  -   2010-<?php echo date('Y'); ?> г <br />
		</p>
      </footer>
	  </div>

</div>
</body>
</html>
