<h3>Добавление сообщения</h3>
<?php echo Form::open('/guestbook/add')?>
<?php echo Form::label('name', 'Введите ваше имя (max 64)') ?><br />
<?php echo Form::input('name', HTML::chars(Arr::get($_POST, 'name')))?> <br />
<?php echo Form::label('content', 'Введите ваше сообщение (max 1024)') ?>  <br />
<?php echo Form::textarea('content', HTML::chars(Arr::get($_POST, 'content')))?> <br />
<?php echo Form::submit('save','Добавить')?>
<?php echo Form::close()?>
