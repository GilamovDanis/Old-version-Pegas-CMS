<div class="span12">
<h4><i class="icon-play-circle"></i> Статья</h4>

<table class="table table-striped table-bordered">
	<tr>
		<td>
		<strong>Название: </strong> <?php echo $post->title ?>
		<p>
		<strong>Категории: </strong> 
		<?php
			foreach ($post->category->find_all() as $category_list) { 
			?>
			<i><?php echo $category_list->title?></i>
			<?php
			} 
			?>
		</p>
		<p>
		<?php echo Text::auto_p($post->content); ?>
		</p>
		<br />

			<script type="text/javascript" src="//yandex.st/share/share.js" charset="utf-8"></script>
			<div class="yashare-auto-init" data-yashareL10n="ru" data-yashareType="button" data-yashareQuickServices="yaru,vkontakte,facebook,twitter,odnoklassniki,moimir"></div> 
		</td>
	</tr>
</table>

<div class="nav-links">
<?php
echo HTML::image('themes/default/icons/blog.png', array('alt' => 'img','style'=>'vertical-align:middle')); echo HTML::anchor('/blog', ' Статья'); 
?>
<br />
<?php
if(Auth::instance()->logged_in('admin')) { 
echo HTML::image('themes/default/icons/delete.png', array('alt' => 'img','style'=>'vertical-align:center')); echo HTML::anchor('/blog/post/delete/'.$post->id, ' Удалить статью',array('onclick'=>"return confirm('Вы точно хотите удалить статью?')")); 
} ?>
</div>


</div>