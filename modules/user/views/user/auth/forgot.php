<div class="span12">
<?php echo Form::open('user/auth/forgot/')?>
<fieldset>
<legend>Восстановление доступа</legend>
<?php echo Form::label('email', 'Введите E-mail') ?>
<?php echo Form::input('email',NULL,array('placeholder'=>'Введите E-mail..'))?> 
<?php echo Form::label('captcha', 'Введите символы с картинки')?> 
<?php echo Captcha::instance()->render(); ?> <br /> <br />
<?php echo Form::input('captcha', FALSE,array('size'=>4,'placeholder'=>'Введите код'))?><br /> 
<?php echo Form::submit('forgot','Отправить',array('class'=>'btn btn-success'))?>
</fieldset>
<?php echo Form::close()?>
<div class="nav-links">
<i class="icon-user"></i><?php echo HTML::anchor('user/auth/', ' Авторизация')?> <br />
<i class="icon-user"></i><?php echo HTML::anchor('user/auth/registration', ' Регистрация')?>
</div>
</div>