<!DOCTYPE html>
<html lang="ru">
  <head>
     <meta charset="utf-8" />
	 <title>Ошибка 404</title>

    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	
	<link type="text/css" href="/themes/default/css/bootstrap.css" rel="stylesheet" />
	<link type="text/css" href="/themes/default/css/app.css" rel="stylesheet" />
	<link type="text/css" href="/themes/default/css/bootstrap-responsive.css" rel="stylesheet" />
	<script type="text/javascript" src="/themes/default/js/jquery-1.9.0.min.js"></script>
	<script type="text/javascript" src="/themes/default/js/bootstrap.min.js"></script>

  </head>

<body>

<!-- Верхнея навигационная панель -->
<div class="navbar navbar-fixed-top">
	  <div class="navbar-inner">
      <div class="container">
        <a class="brand" href="/">CmsPegas.RU</a>
        <div class="nav-collapse">
          <ul class="nav">
            <li class="active"><?php echo HTML::anchor('/#', 'Главная'); ?></li>
            <li><?php echo HTML::anchor('/guestbook', 'Гостевая книга'); ?></li>
            <li><?php echo HTML::anchor('/news', 'Новости'); ?></li>
			<li><?php echo HTML::anchor('/blog', 'Блог'); ?></li>
          </ul>
          <form class="navbar-search pull-left" action="">
			<div class="input-prepend">
			<input type="text" class="span2 search-query" placeholder="Поиск">
			</div>
          </form>
		  
          <ul class="nav pull-right">
			<li><a href="#">Гость</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Меню <b class="caret"></b></a>
              <ul class="dropdown-menu">
			    <li><?php echo HTML::anchor('/auth', 'Авторизация'); ?></li>
				<li><?php echo HTML::anchor('/auth/registration', 'Регистрация'); ?></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.nav-collapse -->
      </div>
    </div><!-- /navbar-inner -->
	</div>

<div class="container">
<!-- Заголовок сайта -->

<header class="subhead" id="overview">
  <div class="head-title">
      <h1>PEGAS <span>CMS</span></h1>
	  <p>&nbsp; Based on <?php echo Kohana::version() ?></p>		
  </div>
  
  <!-- Субменю навигационная панель -->
  <?php echo Widget::load('SubMenu'); ?>
</header>

<div class="row">
  <!-- Основной блок -->
	<div class="span12">
	<div style="text-align:center;">
	<h2><?php echo $message?></h2>
	<?php echo HTML::image('media/images/404.jpg', array('alt' => '404')) ?> <br />
	<h4>Ошибка 404 или Not Found («не найдено») стандартный код ответа HTTP о том, что клиент был в состоянии общаться с сервером, но сервер не может найти данные согласно запросу.</h4> <br />
	</div>
	</div>
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
