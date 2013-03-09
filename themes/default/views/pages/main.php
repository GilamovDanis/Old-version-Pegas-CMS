<div class="span8">
<h3>Написание cms на базе kohana 3.3</h3>
<p>В разработке...</p>
<p>
<h4>В плане:</h4>
Создание бесплатной* CMS для сайтов <br />
На базе <?php echo Kohana::version() ?>
</p>
<p>
Про создание CMS на <?php echo Kohana::version() ?> вы можете почитать в моем блоге. <br />
Скачать Pegas CMS вы можете с репозитория на GitHub'e ,ссылка на него в правом сайдбаре
</p>
</div>

<div class="span4">
<h3>Модули:</h3>
<ol>
<li class="text-success">Регистрация | Авторизация</li>
<li class="text-success">Гостевая книга</li>
<li class="text-success">Новости</li>
<li class="text-success">Блог</li>
<li class="muted">Админ-панель</li>
<li class="muted">Форум</li>
<li class="muted">Загруз-центр</li>
<li class="muted">Редактор страниц</li>
</ol>
</div>

<hr>

<div class="span6">
<?php echo Widget::load('ListNews');  ?>
</div>

<div class="span6">
<?php echo Widget::load('ListGuestbook');  ?>
</div>

<hr>