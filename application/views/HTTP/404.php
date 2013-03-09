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
        <div class="nav-collapse">
          <ul class="nav">
            <li class="active"><?php echo HTML::anchor('/#', 'Главная'); ?></li>
          </ul>
         
        </div><!-- /.nav-collapse -->
      </div>
    </div><!-- /navbar-inner -->
	</div>

<div class="container-fluid">
<!-- Заголовок сайта -->

<header class="subhead" id="overview">
  <div class="head-title">
      <h1>Ошибка 404</h1>	
  </div>
</header>

<div class="row-fluid">
  <!-- Основной блок -->
	<div class="span12">
	<div style="text-align:center;">
	<h2><?php echo $message?></h2>
	<h4>Ошибка 404 или Not Found («не найдено») стандартный код ответа HTTP о том, что клиент был в состоянии общаться с сервером, но сервер не может найти данные согласно запросу.</h4> <br />
	</div>
	</div>
</div>



<!-- Footer -->
</div>
</body>
</html>
