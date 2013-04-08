<?php defined('SYSPATH') or die('No direct script access.');

// Новости RSS
Route::set('news/rss', 'news/rss')
	->defaults(array(
		'controller' => 'rss',
		'action' => 'index'
		));

// Новости
Route::set('news', 'news(/<action>(/<id>))(/<page>)',array('action' => 'add|delete|edit|view'),array('id' => '[0-9]+'),array('page' => '[0-9]+'))
	->defaults(array(
		'controller' => 'news',
		'action' => 'index'
		));