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
			<?php if ($user) { ?>
            <li><a href="#"><?php echo $user->username ?></a></li>
			<?php } else { ?>
			<li><a href="#">Гость</a></li>
			<?php } ?>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Меню <b class="caret"></b></a>
              <ul class="dropdown-menu">
			    <?php if ($user) { ?>
			    <li><?php echo HTML::anchor('/', 'Личный профиль'); ?></li>
				<li class="divider"></li>
				<li><?php echo HTML::anchor('/auth/logout', 'Завершить сессию'); ?></li>
			    <?php } else { ?>
			    <li><?php echo HTML::anchor('/auth', 'Авторизация'); ?></li>
				<li><?php echo HTML::anchor('/auth/registration', 'Регистрация'); ?></li>
			    <?php } ?>
              </ul>
            </li>
          </ul>
        </div><!-- /.nav-collapse -->
      </div>
    </div><!-- /navbar-inner -->
	</div>