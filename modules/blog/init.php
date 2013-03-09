<?php defined('SYSPATH') or die('No direct script access.');
// ���� - ����������/��������/�������������� ���������
Route::set('blog/action/category', 'blog/category/<action>(/<id>)',array('action' => 'add|delete|edit','id' => '[0-9]+'))
	->defaults(array(
		'controller' => 'apanel_blog_category',
		'action' => 'index'
		));
		
// ���� - ����������/��������/�������������� ������
Route::set('blog/action/post', 'blog/post/<action>(/<id>)',array('action' => 'add|delete|edit','id' => '[0-9]+'))
	->defaults(array(
		'controller' => 'apanel_blog_post',
		'action' => 'index'
		));

// ���� - ����� ���������
Route::set('blog/view/category', 'blog/<category>(/<page>)',array('category' => '[a-zA-Z0-9_-]+','page' => '[0-9]+'))
	->defaults(array(
		'controller' => 'blog_category',
		'action' => 'index'
		));

// ���� - ����� ���������
Route::set('blog/view/category_all', 'blog/category/all(/<page>)',array('page' => '[0-9]+'))
	->defaults(array(
		'controller' => 'blog_category',
		'action' => 'all'
		));
		
		
// ���� - ����� ������
Route::set('blog/view/post', 'blog/<category>/<post>',array('category' => '[a-zA-Z0-9_-]+','post' => '[a-zA-Z0-9_-]+'))
	->defaults(array(
		'controller' => 'blog_post',
		'action' => 'index'
		));


// ���� �����
Route::set('blog', 'blog(/<sort>(/<page>))',array('page' => '[0-9]+','sort'=>'count|rating'))
	->defaults(array(
		'controller' => 'blog',
		'action' => 'index'
		));