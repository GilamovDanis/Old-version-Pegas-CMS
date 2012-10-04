<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_User extends Model_Auth_User {
    

	public function labels()
	{
		return array(
			'username'         => 'username',
			'email'            => 'email',
			'password'         => 'password',
			'password_confirm'         => 'password_confirm',
			'captcha'          => 'captcha',
		);
	}

	
	public static function captcha_valid($captcha)
	{
	  return (bool)Captcha::valid($captcha);
	}
	
	public static function login_valid($login)
	{
		 // проверка на длину логина и возможные символы
		 if (!preg_match("#^[a-zа-яё][a-zа-яё0-9\-\_\ ]{2,32}$#ui", $login))return false;
		 // запрещаем одновременное использование русского и английского алфавилов
		 if (preg_match("#[a-z]+#ui", $login) && preg_match("#[а-яё]+#ui", $login))return false;
		 // пробелы вначале или конце ника недопустимы
		 if (preg_match("#(^\ )|(\ $)#ui", $login))return false;
		return true;
	}
} // End User Model