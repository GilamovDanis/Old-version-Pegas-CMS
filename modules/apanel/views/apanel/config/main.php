<div class="span12">
<h3>Настройки</h3> 

<?php echo Form::open('apanel/config/')?>
<?php echo Form::label('title', 'Название сайта') ?>
<?php echo Form::input('title', HTML::chars($config->title))?> 
<?php echo Form::label('theme', 'Тема оформления сайта') ?>
<select name="theme">
<?php
$dir_themes = opendir('themes/');
        while ($dir = readdir($dir_themes)) {

            if ($dir {0} == '.') {
                continue; // все файлы и папки начинающиеся с точки пропускаем
            }
            if (is_dir('themes/'.$dir)) {
                if (!file_exists('themes/'.$dir.'/config/theme_'.$dir.'.php')) {
                    // если нет конфига, то тему оформления тоже пропускаем
                    continue;
                } 
				
				$config_theme=Kohana::$config->load('theme_'.$dir);
				
				if ($config_theme->get('type')) continue;
?>			
				<option value="<?php echo $dir ?>" <?php if ($dir==$config->theme) echo "selected"?>><?php echo $dir?></option>
<?php
            }   
        }
closedir($dir_themes);
?>
</select>

<?php echo Form::label('admin_theme', 'Тема оформления админ-панели') ?>
<select name="admin_theme">
<?php
$dir_themes = opendir('themes/');
        while ($dir = readdir($dir_themes)) {

            if ($dir {0} == '.') {
                continue; // все файлы и папки начинающиеся с точки пропускаем
            }
            if (is_dir('themes/'.$dir)) {
                if (!file_exists('themes/'.$dir.'/config/theme_'.$dir.'.php')) {
                    // если нет конфига, то тему оформления тоже пропускаем
                    continue;
                } 
				
				$config_theme=Kohana::$config->load('theme_'.$dir);
				
				if (!$config_theme->get('type')) continue;
?>			
				<option value="<?php echo $dir ?>" <?php if ($dir==$config->admin_theme) echo "selected"?>><?php echo $dir?></option>
<?php
            }   
        }
closedir($dir_themes);
?>
</select> <br />

<?php echo Form::submit('register','Обновить',array('class'=>'btn btn-success'))?> 
<?php echo Form::close()?>

<div class="nav-links">
<i class="icon-tags"></i><?php echo HTML::anchor('apanel/', ' Apanel')?>
</div>
</div>