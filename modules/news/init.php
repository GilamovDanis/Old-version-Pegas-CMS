<?php defined('SYSPATH') or die('No direct script access.');

// Guestbook
Route::set('news', 'news(/<action>(/<id>))(/<page>)',array('action' => 'add|delete|edit'),array('id' => '[0-9]+'),array('page' => '[0-9]+'))
	->defaults(array(
		'controller' => 'news',
		'action' => 'index'
		));
