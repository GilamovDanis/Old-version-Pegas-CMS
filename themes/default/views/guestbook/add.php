<h3>Добавление сообщения</h3>
<?php echo Form::open('/guestbook/add')?>
<?php if ($user) { ?>
<p class="s1">
Вы вошли как <b><?php echo $user->username?></b>, вам не потребуеться вводить свое имя и код с картинки.
</p>
<?php } else { ?>
<p class="s1">Вы вошли как <b>Гость</b>, вам потребуеться дополнительно ввести свое имя и код с картинки. 
</p>
<?php echo Form::label('name', 'Введите ваше имя (max 64)') ?><br />
<?php echo Form::input('name', HTML::chars(Arr::get($_POST, 'name')))?> <br />
<?php echo Form::label('captcha', 'Введите символы с картинки')?> <br />
<?php echo $view_captcha; ?> <br />
<?php echo Form::input('captcha', FALSE,array('size'=>4))?> <br />
<?php } ?>
<?php echo Form::label('content', 'Введите ваше сообщение (max 1024)') ?>  <br />
<?php echo Form::textarea('content', HTML::chars(Arr::get($_POST, 'content')))?> <br />
<?php echo Form::submit('save','Добавить')?>
<?php echo Form::close()?>
