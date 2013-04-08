<div class="subnav">
    <ul class="nav nav-pills">
	  <li><?php echo HTML::anchor('/apanel/info', 'Информация'); ?></li>
	  <li><?php echo HTML::anchor('/apanel/config', 'Настройки'); ?></li>
	  <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Пользователи <b class="caret"></b></a>
              <ul class="dropdown-menu">
				<li><?php echo HTML::anchor('/apanel/user/', 'Пользователи'); ?></li>
				<li><?php echo HTML::anchor('/apanel/user/add', 'Добавить пользователя'); ?></li>
              </ul>
      </li>
    </ul>
 </div>