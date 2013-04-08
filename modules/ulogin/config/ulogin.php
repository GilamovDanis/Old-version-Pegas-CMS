<?php defined('SYSPATH') OR die('No direct access allowed.');

return array
(
	// Возможные значения: small, panel, window
	'type' 			=> 'window',
	
	// на какой адрес придёт POST-запрос от uLogin
	'redirect_uri' 	=>	URL::site('auth/',TRUE),
	
	// Сервисы, выводимые сразу
	'providers'		=> array(
		'vkontakte',
		'facebook',
		'twitter',
		'google',
	),
	
	// Выводимые при наведении
	'hidden' 		=> array(
		'odnoklassniki',
		'mailru',
		'livejournal',
		'openid'
	),
	
	// Эти поля используются для поля username в таблице users
	'username' 		=> array (
		'first_name',
		'last_name',
	),
	
	// Обязательные поля
	'fields' 		=> array(
		'email',
		'phone',
	),
	
	// Необязательные поля
	'optional'		=> array(),
);
