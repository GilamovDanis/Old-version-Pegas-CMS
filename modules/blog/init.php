<?php defined('SYSPATH') or die('No direct script access.');


// Блог - вывод статьи
Route::set('blog/view/post', 'blog/<category>/<post>.html',array('category' => '.+'),array('post' => '.+'))
	->defaults(array(
		'controller' => 'blog_post',
		'action' => 'index'
		));

// Блог - вывод категории
Route::set('blog/view/category', 'blog/<category>(/<page>)',array('category' => '.+'))
	->defaults(array(
		'controller' => 'blog_category',
		'action' => 'index'
		));

// Блог - Добавление/Удаление/Редактирование категории
Route::set('blog/action/category', 'blog/category/<action>(/<id>)',array('action' => 'add|delete|edit'),array('id' => '[0-9]+'))
	->defaults(array(
		'controller' => 'apanel_category',
		'action' => 'index'
		));
		
// Блог - Добавление/Удаление/Редактирование статьи
Route::set('blog/action/post', 'blog/<action>(/<id>)',array('action' => 'add|delete|edit'),array('id' => '[0-9]+'))
	->defaults(array(
		'controller' => 'apanel_post',
		'action' => 'index'
		));

// Вывод блога
Route::set('blog', 'blog(/<page>)',array('page' => '[0-9]+'))
	->defaults(array(
		'controller' => 'blog',
		'action' => 'index'
		));
