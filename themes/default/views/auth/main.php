<div class="span8">
<?php echo Form::open('auth')?>
<fieldset>
<legend>Войти</legend>
<?php echo Ulogin::factory()->render(); ?> <br />
<?php echo Form::label('username', 'Логин') ?>
<?php echo Form::input('username', HTML::chars(Arr::get(Request::current()->post(), 'username')),array('placeholder'=>'Введите логин..'))?> 
<?php echo Form::label('password', 'Пароль')?> 
<?php echo Form::password('password',NULL,array('placeholder'=>'Введите логин..'))?> 
<label class="checkbox">
      <input type="checkbox" name="save" value="1" /> Запомнить сессию
</label>
<?php echo Form::submit('register','Авторизация',array('class'=>'btn btn-success'))?>
</fieldset>
<?php echo Form::close()?>
<div class="nav-links">
<i class="icon-user"></i><?php echo HTML::anchor('auth/registration', ' Регистрация')?>
</div>
</div>

<div class="span4">
<?php echo View::factory('/auth/sidebarauth'); ?>
</div>