<?php defined('SYSPATH') or die('No direct access allowed.');

return array(
	'title' => 'Админ панель',
	'description' => 'Админ панель',
	'author' => 'Twitter Boostrap',
	'type' => 1, // 0 - пользовательская ,1 - админ
	/**
	* Постоянно подключаемые файлы .css
	*/
	'styles'          => array(
		'themes/admin/css/bootstrap',
		'themes/admin/css/app',
		//'themes/admin/css/bootstrap-responsive.min',
    ),
	/**
	* Постоянно подключаемые файлы .js
	*/
	'jscripts'          => array(
	'themes/admin/js/jquery-1.9.0.min',
	'themes/admin/js/bootstrap.min',
	//'themes/admin/js/app',
    ),
	
);
