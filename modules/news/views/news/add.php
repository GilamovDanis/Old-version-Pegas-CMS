<div class="span12">
<script type="text/javascript">
tinyMCE.init({
        mode : "textareas",
		language : "ru",
		plugins : "safari,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",
        theme : "advanced",
		extended_valid_elements : "div[align|class|style|id|title]",
		extended_valid_elements : "iframe[name|src|framespacing|border|frameborder|scrolling|title|height|width],object[declare|classid|codebase|data|type|codetype|archive|standby|height|width|usemap|name|tabindex|align|border|hspace|vspace]",
        
		theme_advanced_buttons1 : "bold,italic,underline,emotions,strikethrough,blockquote,forecolor,formatselect,fontselect,fontsizeselect,link,unlink,|,image,media,|,code,preview,fullscreen",
		theme_advanced_buttons2 : "charmap,insertdate,inserttime,|,outdent,indent,|,table,justifyleft,justifycenter,justifyright,bullist,numlist,|,undo,redo,|,pagebreak,print",
        
		theme_advanced_toolbar_align : "left",
        relative_urls : false

});
</script>
<?php echo Form::open('/news/add')?>
<fieldset>
<legend>Добавление новости</legend>
<?php echo Form::label('title', 'Введите название новости (max 128)',array('placeholder'=>'Введите название новости')) ?>
<?php echo Form::input('title')?> 
<?php echo Form::label('content', 'Введите текст новости') ?> 
<?php echo Form::textarea('content',HTML::chars(Arr::get(Request::current()->post(), 'content')))?> <br />
<?php echo Form::submit('save','Добавить',array('class'=>'btn btn-success'))?>
</fieldset>
<?php echo Form::close()?>
<div class="nav-links">
<?php echo HTML::image('themes/default/icons/news.png', array('alt' => 'img','style'=>'vertical-align:middle')); ?> <?php echo HTML::anchor('/news/', 'Новости'); ?>
</div>
</div>