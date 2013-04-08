<div class="navbar navbar-fixed-top">
	  <div class="navbar-inner">
      <div class="container">
        <a class="brand" href="/"><?php echo $title?></a>
        <div class="nav-collapse">
          <ul class="nav">
            <li><?php echo HTML::anchor('/#', 'Главная'); ?></li>
            <li><?php echo HTML::anchor('/guestbook', 'Гостевая книга'); ?></li>
            <li><?php echo HTML::anchor('/news', 'Новости'); ?></li>
			<li><?php echo HTML::anchor('/blog', 'Блоги'); ?></li>
          </ul>
  
          <ul class="nav pull-right">
			<?php if ($user) { ?>
            <li><a href="/user/<?php echo $user->username?>"><?php echo $user->username ?></a></li>
			<?php } else { ?>
			<li><a href="#">Гость</a></li>
			<?php } ?>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Меню <b class="caret"></b></a>
              <ul class="dropdown-menu">
			    <?php if ($user) { ?>
				<?php if(Auth::instance()->logged_in('admin')) { ?>
				<li><?php echo HTML::anchor('/apanel', 'Админ-панель'); ?></li>
				<?php } ?>
			    <li><?php echo HTML::anchor('/user/'.$user->id, 'Личный профиль'); ?></li>
				<li class="divider"></li>
				<li><?php echo HTML::anchor('/user/auth/logout', 'Завершить сессию'); ?></li>
			    <?php } else { ?>
			    <li><?php echo HTML::anchor('/user/auth', 'Авторизация'); ?></li>
				<li><?php echo HTML::anchor('/user/auth/registration', 'Регистрация'); ?></li>
			    <?php } ?>
              </ul>
            </li>
          </ul>
        </div><!-- /.nav-collapse -->
      </div>
    </div><!-- /navbar-inner -->
	</div>