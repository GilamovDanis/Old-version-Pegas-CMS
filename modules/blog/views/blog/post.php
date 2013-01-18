<h2>Статья</h2> <br />

<table>
	<tr class="post1">
		<td width="55">
		<?php echo HTML::image('themes/default/icons/blog48.png', array('alt' => 'Блоги')) ?>
		</td>
		<td width="915">
			<div class="post_title">
			<b><?php echo $post->title ?></b> - <?php echo Date::timef($post->created)?>
			</div>
			<div class="post_content">
			<?php 
				 echo Text::auto_p($post->content);
			?>
			</div>
			<script type="text/javascript" src="//yandex.st/share/share.js" charset="utf-8"></script>
			<div class="yashare-auto-init" data-yashareL10n="ru" data-yashareType="button" data-yashareQuickServices="yaru,vkontakte,facebook,twitter,odnoklassniki,moimir"></div> 
		</td>
	</tr>
</table>

<div class="links">
<?php
echo HTML::image('themes/default/icons/blog.png', array('alt' => 'img','style'=>'vertical-align:middle')); echo HTML::anchor('/blog', ' Блоги'); 
?>
<br />
<?php
if(Auth::instance()->logged_in('admin')) { 
echo HTML::image('themes/default/icons/delete.png', array('alt' => 'img','style'=>'vertical-align:middle')); echo HTML::anchor('/blog/post/delete/'.$post->id, ' Удалить статью',array('onclick'=>"return confirm('Вы точно хотите удалить статью?')")); 
} ?>
</div>