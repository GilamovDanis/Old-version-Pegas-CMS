<div id="sidebar">
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
		
		<h2>Меню</h2>
		<div class="main_menu">
		<?php echo HTML::image('themes/default/icons/guestbook.png', array('style'=>'vertical-align: middle;'));  echo HTML::anchor('/guestbook/', ' Гостевая книга'); ?> <br />
		</div>
</div>