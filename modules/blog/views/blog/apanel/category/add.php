<div class="span12">
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
<?php echo Form::open('/blog/category/add',array('enctype'=>'multipart/form-data'))?>
<fieldset>
<legend>Добавление новой категории</legend>
<?php echo Form::label('title', 'Заголовок категории (max 128)') ?> 
<?php echo Form::input('title', HTML::chars(Arr::get(Request::current()->post(), 'title')),array('placeholder'=>'Введите название категории'))?>
<?php echo Form::label('category_id', 'Выберите категорию') ?>  
<select name="category_id">

<option value="0">Корневая категория</option>
		<?php 
		foreach ($category->find_all() as $categories) { 
		if (!$categories->category_id) {?>
		<option value="<?php echo $categories->id?>" <?php if ($categories->id==HTML::chars(Arr::get(Request::current()->post(), 'category_id'))) echo "selected"?>><?php echo $categories->title?></option>	
		<?php }
		 } 
		?>
</select> 
 <span class="help-block">
 * Для корневой директории выберите пункт  корневая категория(начальная категория) <br />
* Для создания подкатегорий выберите категорию из списка
</span>
<br />
<?php echo Form::label('content', 'Введите описание к категории') ?>  
<?php echo Form::textarea('content', NULL,array('rows'=>10))?> 
<?php echo Form::submit('save','Добавить',array('class'=>'btn btn-success'))?>
</fieldset>
<?php echo Form::close()?>

<div class="nav-links">
<?php
echo HTML::image('themes/default/icons/blog.png', array('alt' => 'img','style'=>'vertical-align:middle')); echo HTML::anchor('/blog', ' Статьи'); 
?>
</div>
</div>