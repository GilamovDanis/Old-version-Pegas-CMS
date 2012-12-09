<?php echo Widget::load('ListNews');  ?>
<h2>Написание cms на базе kohana 3.3</h2>
<p>В разработке...</p>
<?php echo HTML::image('media/images/pegas.gif', array('alt' => '404','class'=>'alignleft')) ?> 
<p>
<h4>В плане:</h4>
Создание бесплатной* CMS для сайтов <br />
На базе <?php echo Kohana::version() ?> <br />
<h4>Модули:</h4>
1.Регистрация/Авторизация - по привилегиям <br />
2. Личные профили <br />
3. Гостевая книга <br />
4. Новости <br />
5. Блог <br />
6. Форум <br />
7. Загруз-центр <br />
8. Галерея 
</p>
<p>
Про создание CMS на <?php echo Kohana::version() ?> вы можете почитать на моем блоге. <br />
Скачать Pegas CMS вы можете с репозитория на GitHub'e ,ссылка на него в правом сайдбаре <br /><br />
&raquo; <?php echo HTML::anchor('http://gilamov.ru', 'Мой блог - Gilamov.ru'); ?> <br />
&raquo; <?php echo HTML::anchor('http://gilamov.ru/kohana', 'Раздел в блоге о Kohana'); ?> <br />
</p>
<?php echo Widget::load('ListGuestbook');  ?>
