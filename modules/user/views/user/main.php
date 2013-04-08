<div class="span12">
<h4><i class="icon-tags"></i> Пользователь - <?php echo $profile_user->username ?></h4>
<p class="text-info">Личная информация доступна только администраторам и самому пользователю</p>
<br />
<?php if(Auth::instance()->logged_in('admin') || $user && $user->id==$profile_user->id) { ?>
<p><b>E-mail:</b> <?php echo $profile_user->email; ?></p>
<?php } ?>

<?php if(Auth::instance()->logged_in('admin') || $user && $user->id==$profile_user->id) { ?>
	<div class="nav-links">
	<?php
	echo HTML::image('themes/default/icons/edit.png', array('alt' => 'img','style'=>'vertical-align:center')); echo HTML::anchor('/user/edit/'.$user->id, ' Редактировать профиль'); 
	?>
	</div>
<?php } ?>
</div>