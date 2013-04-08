<?php defined('SYSPATH') or die('No direct script access.');
	
// Apanel User
Route::set('apanel/user', 'apanel/user(/<action>(/<id>(/<page>)))')
	->defaults(array(
		'controller' => 'apanel_user',
		'action' => 'index'
		));
		
// Apanel Info
Route::set('apanel/info', 'apanel/info(/<action>(/<id>(/<page>)))')
	->defaults(array(
		'controller' => 'apanel_info',
		'action' => 'index'
		));

// Apanel Config
Route::set('apanel/config', 'apanel/config(/<action>(/<id>(/<page>)))')
	->defaults(array(
		'controller' => 'apanel_config',
		'action' => 'index'
		));
		
// Apanel Courses
Route::set('apanel/courses', 'apanel/courses(/<action>(/<id>(/<page>)))')
	->defaults(array(
		'controller' => 'apanel_courses',
		'action' => 'index'
		));
		
// Apanel
Route::set('apanel', 'apanel')
	->defaults(array(
		'controller' => 'apanel',
		'action' => 'index'
		));