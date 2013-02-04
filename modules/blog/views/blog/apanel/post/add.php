<div class="span8">
<script type="text/javascript">
tinyMCE.init({
        mode : "textareas",
		language : "ru",
		plugins : "safari,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",
        theme : "advanced",
		extended_valid_elements : "div[align|class|style|id|title]",
		extended_valid_elements : "iframe[name|src|framespacing|border|frameborder|scrolling|title|height|width],object[declare|classid|codebase|data|type|codetype|archive|standby|height|width|usemap|name|tabindex|align|border|hspace|vspace]",
        
		theme_advanced_buttons1 : "bold,italic,underline,strikethrough,blockquote,forecolor,backcolor,link,unlink,justifyleft,justifycenter,justifyright,bullist,numlist,|,table,image,media,|,undo,redo,|,code,fullscreen",
		theme_advanced_buttons2 : "emotions,hr,charmap,formatselect,fontselect,fontsizeselect,pagebreak,print,",
        
		theme_advanced_toolbar_align : "left",
        relative_urls : false

});
</script>
<?php echo Form::open('/blog/post/add')?>
<fieldset>
<legend>Добавление новой статьи</legend>
<?php echo Form::label('title', 'Заголовок статьи (max 128)') ?> 
<?php echo Form::input('title', HTML::chars(Arr::get($_POST, 'title')),array('placeholder'=>'Введите название статьи'))?>
<?php echo Form::label('content', 'Введите текст статьи') ?>  
<?php echo Form::textarea('content', HTML::chars(Arr::get($_POST, 'content')),array('rows'=>20))?> <br />
<?php echo Form::submit('save','Добавить',array('class'=>'btn btn-success'))?>
</fieldset>
<?php echo Form::close()?>

<div class="nav-links">
<?php
echo HTML::image('themes/default/icons/blog.png', array('alt' => 'img','style'=>'vertical-align:middle')); echo HTML::anchor('/blog', ' Блоги'); 
?>
</div>
</div>

<div class="span4">
<?php echo View::factory('/blog/apanel/post/sidebar1'); ?>
</div>