<div class="navbar navbar-fixed-top">
	  <div class="navbar-inner">
      <div class="container">
        <a class="brand" href="/apanel">Админ панель</a>
        <div class="nav-collapse">
          <ul class="nav">
            <li><?php echo HTML::anchor('/#', 'Главная'); ?></li>
          </ul>
         
          <ul class="nav pull-right">
            <li><a href="/user/<?php echo $user->username?>"><?php echo $user->username ?></a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Меню <b class="caret"></b></a>
              <ul class="dropdown-menu">
				<li><?php echo HTML::anchor('/', 'Закрыть админ-панель'); ?></li>
				<li><?php echo HTML::anchor('/apanel', 'Админ-панель'); ?></li>
				<li class="divider"></li>
				<li><?php echo HTML::anchor('/user/auth/logout', 'Завершить сессию'); ?></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.nav-collapse -->
      </div>
    </div><!-- /navbar-inner -->
	</div>