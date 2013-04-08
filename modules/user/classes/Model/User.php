<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_User extends Model_Auth_User {
    
	protected $_has_many = array(
		'user_tokens' => array('model' => 'User_Token'),
		'roles'       => array('model' => 'Role', 'through' => 'roles_users'),
		'ulogins' => array(),
		'courses_payments' => array(
			'model' => 'Courses_Posts',
			'through' => 'courses_posts_payments',
			'foreign_key' => 'user_id',
			'far_key' => 'post_id'
		),
		'courses_regs' => array(
			'model' => 'Courses_Posts',
			'through' => 'courses_posts_regs',
			'foreign_key' => 'user_id',
			'far_key' => 'post_id'
		),
	);
	
	/**
	 * Create a new user
	 *
	 * Example usage:
	 * ~~~
	 * $user = ORM::factory('User')->create_user($_POST, array(
	 *	'username',
	 *	'password',
	 *	'email',
	 * );
	 * ~~~
	 *
	 * @param array $values
	 * @param array $expected
	 * @throws ORM_Validation_Exception
	 */
	public function create_user($values, $expected)
	{
		// Validation for passwords
		$extra_validation = Model_User::get_password_validation($values)
			->rule('password', 'not_empty');
			
		$extra_validation = Validation::factory($values)->rule('password' , 'not_empty')
														->rule('password' , 'min_length', array(':value', 4))
														->rule('password' , 'max_length', array(':value', 32))
														->rule('password_confirm', 'matches', array(':validation', 'password_confirm', 'password'))
														->rule('captcha' , 'not_empty')
														->rule('captcha' , 'Model_User::captcha_valid')
														->rule('username' , 'Model_User::username_valid');

		return $this->values($values, $expected)->create($extra_validation);
	}
	
	
	/**
	 * Update an existing user
	 *
	 * [!!] We make the assumption that if a user does not supply a password, that they do not wish to update their password.
	 *
	 * Example usage:
	 * ~~~
	 * $user = ORM::factory('User')
	 *	->where('username', '=', 'kiall')
	 *	->find()
	 *	->update_user($_POST, array(
	 *		'username',
	 *		'password',
	 *		'email',
	 *	);
	 * ~~~
	 *
	 * @param array $values
	 * @param array $expected
	 * @throws ORM_Validation_Exception
	 */
	public function update_user($values, $expected = NULL)
	{
		if (empty($values['password']))
		{
			unset($values['password'], $values['password_confirm']);
		}

		// Validation for passwords
		$extra_validation = Model_User::get_password_validation($values);
		
		$extra_validation = Validation::factory($values)->rule('password' , 'not_empty')
														->rule('password' , 'min_length', array(':value', 4))
														->rule('password' , 'max_length', array(':value', 32))
														->rule('password_confirm', 'matches', array(':validation', 'password_confirm', 'password'))
														->rule('captcha' , 'not_empty')
														->rule('captcha' , 'Model_User::captcha_valid')
														->rule('username' , 'Model_User::username_valid');

		return $this->values($values, $expected)->update($extra_validation);
	}
	
	public function rules()
	{
		return array(
			'username' => array(
				array('not_empty'),
				array('max_length', array(':value', 32)),
				array(array($this, 'unique'), array('username', ':value')),
			),
			'password' => array(
				array('not_empty'),
				array('min_length', array(':value', 6)),
			),
			'email' => array(
				array('not_empty'),
				array('email'),
				array(array($this, 'unique'), array('email', ':value')),
			),
		);
	}
	

	public function labels()
	{
		return array(
			'username'         => 'username',
			'email'            => 'email',
			'password'         => 'password',
			'password_confirm'         => 'password_confirm',
			'captcha'          => 'captcha',
			'phone'          => 'phone',
		);
	}

	
	public static function captcha_valid($captcha)
	{
	  return (bool)Captcha::valid($captcha);
	}
	
	public static function username_valid($login)
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