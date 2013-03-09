<!DOCTYPE html>
<html lang="ru">
  <head>
     <meta charset="utf-8" />
	 <title><?php echo $title ?></title>
	 <meta name="keywords" content="<?php echo $keywords ?>" />
     <meta name="description" content="<?php echo $description ?>" />

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
  
  <!-- Субменю навигационная панель -->
  <?php 
  // Мега костыль. Спать охота
  $place=array('Blog','Blog_Post','Blog_Category','Apanel_Blog_Post','Apanel_Blog_Category');
  if (in_array(Request::current()->controller(),$place)) {
	echo Widget::load('BlogSubMenu'); 
  } else {
	echo Widget::load('SubMenu'); 
  }
  ?>
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
        <div class="links">
		  Наши кнопки:
          <a href="news/rss">RSS</a>
          <a href="https://twitter.com/">Twitter</a>
          <a href="http://vk.com/thomaspark/bootswatch/">Вконтакте</a>
          <a href="http://facebook.com">Facebook</a>
        </div>
        <p>
		&copy; Авторские права Gilamov Danis <?php echo HTML::anchor('/', 'CmsPegas.ru'); ?>  -   2011-<?php echo date('Y'); ?> г <br />
        Powered by <?php echo HTML::anchor('/', 'Pegas CMS'); ?>. 
		</p>
      </footer>
	  </div>

</div>
</body>
</html>
