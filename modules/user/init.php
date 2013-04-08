<?php defined('SYSPATH') or die('No direct script access.');

// ������������ - �����������/�����������
Route::set('user/auth', 'user/auth(/<action>)',array('action'=>'registration|logout|forgot'))
	->defaults(array(
		'controller' => 'user_auth',
		'action' => 'index'
		));

// ������������ - �������
Route::set('user', 'user/(<action>/)<id>',array('action'=>'edit','id' =>'[a-zA-Z0-9_-]+'))
	->defaults(array(
		'controller' => 'user',
		'action' => 'index'
		));
