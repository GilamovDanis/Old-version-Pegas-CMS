<div class="span8">
<?php echo Form::open('auth/registration')?>
<fieldset>
<legend>Регистрация</legend>
<?php echo Form::label('username', 'Логин (max 32)') ?>
<?php echo Form::input('username', HTML::chars(Arr::get($_POST, 'username')),array('placeholder'=>'Введите логин..'))?> 
<?php echo Form::label('email', 'E-mail') ?>
<?php echo Form::input('email', HTML::chars(Arr::get($_POST, 'email')),array('placeholder'=>'Введите E-mail..'))?> 
<?php echo Form::label('password', 'Пароль (max 64)')?> 
<?php echo Form::password('password')?> 
<?php echo Form::label('confirm_password', 'Повторите пароль')?> 
<?php echo Form::password('confirm_password')?> <br />
<?php echo Form::label('captcha', 'Введите символы с картинки')?> 
<?php echo Captcha::instance()->render(); ?> <br /> <br />
<?php echo Form::input('captcha', FALSE,array('size'=>4,'placeholder'=>'Введите код'))?><br /> 
<?php echo Form::submit('register','Зарегистрироваться',array('class'=>'btn btn-success'))?> 
</fieldset>
<?php echo Form::close()?>

<div class="nav-links">
<i class="icon-user"></i><?php echo HTML::anchor('auth/registration', ' Регистрация')?>
</div>
</div>

<div class="span4">
<?php echo View::factory('/auth/sidebarregistration'); ?>
</div>