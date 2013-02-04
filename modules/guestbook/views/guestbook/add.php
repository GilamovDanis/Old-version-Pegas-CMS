<script type="text/javascript">
tinyMCE.init({
        mode : "textareas",
		language : "ru",
		plugins : "safari,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",
        theme : "advanced",
		extended_valid_elements : "div[align|class|style|id|title]",
		extended_valid_elements : "iframe[name|src|framespacing|border|frameborder|scrolling|title|height|width],object[declare|classid|codebase|data|type|codetype|archive|standby|height|width|usemap|name|tabindex|align|border|hspace|vspace]",
        
		theme_advanced_buttons1 : "bold,italic,underline,emotions,strikethrough,blockquote,forecolor,formatselect,fontselect,fontsizeselect,link,unlink,|,image,media,|,code,preview,fullscreen",
        
		theme_advanced_toolbar_align : "left",
        relative_urls : false

});
</script>

<?php echo Form::open('/guestbook/add')?>
<fieldset>
<legend>Добавление сообщения</legend>
<?php if ($user) { ?>
<p>
Вы вошли как <strong><?php echo $user->username?></strong>, вам не потребуеться вводить свое имя и код с картинки.
</p>
<?php } else { ?>
<p>Вы вошли как <strong>Гость</strong>, вам потребуеться дополнительно ввести свое имя и код с картинки. 
</p>
<?php echo Form::label('name', 'Введите ваше имя (max 64)') ?>
<?php echo Form::input('name', HTML::chars(Arr::get($_POST, 'name')),array('placeholder'=>'Введите имя'))?> 
<?php echo Form::label('captcha', 'Введите символы с картинки')?> 
<?php echo Captcha::instance()->render(); ?> <br /> <br />
<?php echo Form::input('captcha', FALSE,array('size'=>4,'placeholder'=>'Введите код'))?><br /> 
<?php } ?>
<?php echo Form::label('content', 'Введите ваше сообщение (max 1024)') ?> 
<?php echo Form::textarea('content', HTML::chars(Arr::get($_POST, 'content')),array('rows'=>15))?> <br />
<?php echo Form::submit('save','Добавить',array('class'=>'btn btn-success'))?>
</fieldset>
<?php echo Form::close()?>
