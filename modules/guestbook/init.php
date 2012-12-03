<?php defined('SYSPATH') or die('No direct script access.');

// Guestbook
Route::set('guestbook', 'guestbook(/<action>(/<id>))(/<page>)',array('action' => 'add|delete|edit|quote'),array('id' => '[0-9]+'),array('page' => '[0-9]+'))
	->defaults(array(
		'controller' => 'guestbook',
		'action' => 'index'
		));
