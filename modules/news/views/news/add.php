<h3>Добавление новости</h3>
<?php echo Form::open('/news/add')?>
<?php echo Form::label('title', 'Введите название новости (max 64)') ?><br />
<?php echo Form::input('title')?> <br />
<?php echo Form::label('content', 'Введите текст новости (max 1024)') ?>  <br />
<?php echo Form::textarea('content')?> <br />
<?php echo Form::submit('save','Добавить')?>
<?php echo Form::close()?>
<div class="links">
<?php echo HTML::image('themes/default/icons/news.png', array('alt' => 'img','style'=>'vertical-align:middle')); ?> <?php echo HTML::anchor('/news/', 'Новости'); ?>
</div>