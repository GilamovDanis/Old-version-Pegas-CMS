<div class="span12">
<?php echo Form::open('apanel/user/add')?>
<fieldset>
<legend>Добавление пользователя</legend>
<?php echo Form::label('username', 'Логин (max 32)') ?>
<?php echo Form::input('username', HTML::chars(Arr::get(Request::current()->post(), 'username')),array('placeholder'=>'Введите логин..'))?> 
<?php echo Form::label('email', 'E-mail') ?>
<?php echo Form::input('email', HTML::chars(Arr::get(Request::current()->post(), 'email')),array('placeholder'=>'Введите E-mail..'))?> 
<?php echo Form::label('phone', 'Введите номер телефона') ?>
<?php echo Form::input('phone', HTML::chars(Arr::get(Request::current()->post(), 'phone')),array('placeholder'=>'Введите номер..'))?> 
<?php echo Form::label('password', 'Пароль (max 64)')?> 
<?php echo Form::password('password')?> 
<?php echo Form::label('password_confirm', 'Повторите пароль')?> 
<?php echo Form::password('password_confirm')?> <br />
<?php echo Form::label('captcha', 'Введите символы с картинки')?> 
<?php echo Captcha::instance()->render(); ?> <br /> <br />
<?php echo Form::input('captcha', FALSE,array('size'=>4,'placeholder'=>'Введите код'))?><br /> 
<?php echo Form::submit('register','Зарегистрироваться',array('class'=>'btn btn-success'))?> 
</fieldset>
<?php echo Form::close()?>

<div class="nav-links">
<i class="icon-tags"></i><?php echo HTML::anchor('apanel/', ' Apanel')?> <br />
<i class="icon-user"></i><?php echo HTML::anchor('apanel/user/', ' Пользователи')?>
</div>
</div>