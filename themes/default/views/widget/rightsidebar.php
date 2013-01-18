<h2>Pegas-CMS</h3>
	<div class="main_menu">
	<?php echo HTML::image('themes/default/icons/news.png', array('style'=>'vertical-align: middle;'));  echo HTML::anchor('https://github.com/GilamovDanis/Pegas-CMS', ' Репозиторий Pegas CMS'); ?> 
	</div>
<br />
<?php
/**
* Состояние пользователя
*/
if ($user) {
	echo View::factory('/auth/user');
} else {
	echo View::factory('/auth/main'); 
}
?>
<br />
<h2>Меню</h2>
	<div class="main_menu">
	<?php echo HTML::image('themes/default/icons/news.png', array('style'=>'vertical-align: middle;'));  echo HTML::anchor('/news/', ' Новости сайта'); ?> <br />
	<?php echo HTML::image('themes/default/icons/guestbook.png', array('style'=>'vertical-align: middle;'));  echo HTML::anchor('/guestbook/', ' Гостевая книга'); ?> <br />
	<?php echo HTML::image('themes/default/icons/blog.png', array('style'=>'vertical-align: middle;'));  echo HTML::anchor('/blog/', ' Блоги'); ?> <br />
	</div>
</div>