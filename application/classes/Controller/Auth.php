<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Auth extends Controller_Page {


	public function action_index()
	{
	$this->template->title = 'Авторизация';
	
	$data = array();
	
		if($this->auth->logged_in()) {
			HTTP::redirect(URL::site());
		} else {
			if ($_POST) {
			$data = Arr::extract($_POST, array('username', 'password', 'save'));
			
                 if($this->auth->login($data['username'], $data['password'], (bool)$data['save'])) {			
					HTTP::redirect(URL::site());
				 } else {
				    $this->error='Пара Логин и Пароль неверны';
				 }
			 }
		}
	
	$this->template->content=View::factory('auth/main');
	$this->template->sidebarcontent=View::factory('auth/sidebarauth');
	}
	
	public function action_registration()
	{ 
	$this->template->title = 'Регистрация';
	$data = array();
	
	     if ($_POST) {
		 $user = ORM::factory('User');
		 
		 $data = Arr::extract($_POST, array('username', 'email', 'password', 'confirm_password', 'captcha'));
		 
		 $data['username']=HTML::chars($data['username']);
         $user->values($data,  array('username', 'email', 'password'));
	     
		 $extra_validation = Validation::factory(
         array('password' => $data['password'],
               'password_confirm' => $data['confirm_password'],
			   'captcha' => $data['captcha'],
			   'username' => $data['username']));
			   
         $extra_validation->rule('password' , 'not_empty')
                          ->rule('password' , 'min_length', array(':value', 4))
                          ->rule('password' , 'max_length', array(':value', 32))
                          ->rule('password_confirm', 'matches', array(':validation', 'password_confirm', 'password'))
						  ->rule('captcha' , 'not_empty')
						  ->rule('captcha' , 'Model_User::captcha_valid')
						  ->rule('username' , 'Model_User::login_valid');
         try {
         $user->save($extra_validation);
         $user->add('roles', ORM::factory('Role')->where('name', '=', 'login')->find());
           
		 $this->auth->login($data['username'], $data['password']);
		  
		 $this->template->fullcontent=true;
         $this->template->content=View::factory('auth/registrationok',$data);
		 
		
		 return TRUE;
         } catch (ORM_Validation_Exception $e) {
           $this->error=$e->errors('validation'); 
         }
		}
	
    $this->template->content=View::factory('auth/registration');
	$this->template->sidebarcontent=View::factory('auth/sidebarregistration');
	}
	
	public function action_logout()
	{   
	$this->auth->logout();
	HTTP::redirect(URL::site());
	}

 

} // End Auth