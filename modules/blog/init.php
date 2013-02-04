<?php defined('SYSPATH') or die('No direct script access.');

// Блог - Добавление/Удаление/Редактирование категории
Route::set('blog/action/category', 'blog/category/<action>(/<id>)',array('action' => 'add|delete|edit','id' => '[0-9]+'))
	->defaults(array(
		'controller' => 'apanel_category',
		'action' => 'index'
		));
		
// Блог - Добавление/Удаление/Редактирование статьи
Route::set('blog/action/post', 'blog/post/<action>(/<id>)',array('action' => 'add|delete|edit','id' => '[0-9]+'))
	->defaults(array(
		'controller' => 'apanel_post',
		'action' => 'index'
		));
		
// Блог - вывод статьи
Route::set('blog/view/post', 'blog/<category>/<post>(.html)',array('category' => '[a-zA-Z0-9_-]+','post' => '[a-zA-Z0-9_-]+'))
	->defaults(array(
		'controller' => 'blog_post',
		'action' => 'index'
		));

// Блог - вывод категории
Route::set('blog/view/category', 'blog/<category>/(<page>)',array('category' => '[a-zA-Z0-9_-]+'))
	->defaults(array(
		'controller' => 'blog_category',
		'action' => 'index'
		));

// Вывод блога
Route::set('blog', 'blog(/<page>)',array('page' => '[0-9]+'))
	->defaults(array(
		'controller' => 'blog',
		'action' => 'index'
		));
