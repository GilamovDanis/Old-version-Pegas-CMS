<div class="span12">
<?php echo Form::open('/user/edit/'.$profile_user->id)?>
<fieldset>
<legend>Редактирование пользователя</legend>
<?php if(Auth::instance()->logged_in('admin')) { ?>
<?php echo Form::label('username', 'Логин (max 32)') ?>
<?php echo Form::input('username', $profile_user->username,array('placeholder'=>'Введите логин..'))?> 
<?php } else { ?>
<p><b>Логин:</b> <?php echo $profile_user->username ?></p>
<?php echo Form::hidden('username', $profile_user->username)?> 
<?php } ?>
<?php echo Form::label('email', 'E-mail') ?>
<?php echo Form::input('email', $profile_user->email,array('placeholder'=>'Введите E-mail..'))?> 
<?php echo Form::label('password', 'Введите новый пароль (max 64)')?> 
<?php echo Form::password('password')?> 
<?php echo Form::label('password_confirm', 'Повторите пароль')?> 
<?php echo Form::password('password_confirm')?> <br />
<?php echo Form::label('captcha', 'Введите символы с картинки')?> 
<?php echo Captcha::instance()->render(); ?> <br /> <br />
<?php echo Form::input('captcha', FALSE,array('size'=>4,'placeholder'=>'Введите код'))?><br /> 
<?php echo Form::submit('register','Редактировать',array('class'=>'btn btn-success'))?> 
</fieldset>
<?php echo Form::close()?>

<div class="nav-links">
<i class="icon-user"></i><?php echo HTML::anchor('/user/'.$user->username, 'Профиль')?> <br />
<?php if(Auth::instance()->logged_in('admin')) { ?>
<i class="icon-user"></i><?php echo HTML::anchor('/apanel/user/', 'Пользователи')?>
<?php } ?>
</div>
</div>