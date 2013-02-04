<div class="span12">
<h3>Статья</h3>

<table class="table table-striped table-bordered">
	<tr>
		<td width="60">
		<?php echo HTML::image('themes/default/icons/blog48.png', array('alt' => 'Блоги')) ?>
		</td>
		<td>
			<p>
			<strong><?php echo $post->title ?></strong> - <?php echo Date::timef($post->created)?>
			</p>
			<p>
			<?php 
				 echo Text::auto_p($post->content);
			?>
			</p>
			<script type="text/javascript" src="//yandex.st/share/share.js" charset="utf-8"></script>
			<div class="yashare-auto-init" data-yashareL10n="ru" data-yashareType="button" data-yashareQuickServices="yaru,vkontakte,facebook,twitter,odnoklassniki,moimir"></div> 
		</td>
	</tr>
</table>

<div class="nav-links">
<?php
echo HTML::image('themes/default/icons/blog.png', array('alt' => 'img','style'=>'vertical-align:middle')); echo HTML::anchor('/blog', ' Блоги'); 
?>
<br />
<?php
if(Auth::instance()->logged_in('admin')) { 
echo HTML::image('themes/default/icons/delete.png', array('alt' => 'img','style'=>'vertical-align:middle')); echo HTML::anchor('/blog/post/delete/'.$post->id, ' Удалить статью',array('onclick'=>"return confirm('Вы точно хотите удалить статью?')")); 
} ?>
</div>

</div>