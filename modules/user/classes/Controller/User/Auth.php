<?php defined('SYSPATH') or die('No direct script access.');

class Controller_User_Auth extends Controller_Page {


	public function action_index()
	{
	$this->template->title = 'Авторизация';
	
	$data = array();
	
	if(!$this->auth->logged_in()) {
	// Ulogin
	$ulogin = Ulogin::factory();
      if ($ulogin->mode()) {
            try
            {
                $this->user=$ulogin->login();
				
				/*
				$email = Kohana::$config->load('email');
				Email::connect($email);
	
				$to = $this->user->email;
				$subject = 'Регистрация на сайте';
				$from = $email->from_email;
				$message =  View::factory('user/auth/email/registration')->bind('email_user',$this->user)->render();
 
				Email::send($to, $from, $subject, $message, $html = true);*/
				
				HTTP::redirect('/');
            }
            catch(ORM_Validation_Exception $e)
            {
                $this->error = $e->errors('validation');
            }
      }
	
	  if (HTTP_Request::POST==Request::current()->method()) {
	  $data = Arr::extract(Request::current()->post(), array('username', 'password', 'save'));
			
             if($this->auth->login($data['username'], $data['password'], (bool)$data['save'])) {			
					HTTP::redirect(URL::site());
			 } else {
				 $this->error='Пара Логин и Пароль неверны';
			 }
	  }
	}
	
	$this->template->content=View::factory('user/auth/main');
	}
	
	public function action_registration()
	{ 
	$this->template->title = 'Регистрация';
	$data = array();
	
	     if (HTTP_Request::POST==Request::current()->method()) {
		 
		 $user = ORM::factory('User');
		 
		 $data = Arr::extract(Request::current()->post(), array('username', 'email','phone', 'password', 'password_confirm', 'captcha'));
		 $data = Arr::map('Security::xss_clean', $data);
		 

         try {
         $user->create_user(Request::current()->post(), array('username','password','email','phone'));
         $user->add('roles', ORM::factory('Role', array('name' => 'login')));
           
		 $this->auth->login($data['username'], $data['password']);
		 
		 $email = Kohana::$config->load('email');
		 Email::connect($email);
	
		 $to = $user->email;
		 $subject = 'Регистрация на сайте';
		 $from = $email->from_email;
		 $message =  View::factory('user/auth/email/registration')->bind('email_user',$user)->render();
 
		 Email::send($to, $from, $subject, $message, $html = true);
		  
         $this->template->content=View::factory('user/auth/registrationok',$data);
		
		 return TRUE;
         } catch (ORM_Validation_Exception $e) {
           $this->error=$e->errors('validation'); 
         }
		}
	
    $this->template->content=View::factory('user/auth/registration');
	}
	
	public function action_forgot()
	{ 
	
	if (HTTP_Request::POST==Request::current()->method()) {
	$data = Arr::extract(Request::current()->post(), array('email','captcha'));
	$data = Arr::map('Security::xss_clean', $data);
	
	$data = Validation::factory($data)->rule('email' , 'not_empty')
									  ->rule('email' , 'email')
									  ->rule('captcha' , 'Model_User::captcha_valid');
									  
			
		if ($data->check()) {
		$user = ORM::factory('User',array('email' => $data['email']));
		
			if(!$user->loaded()){
			throw HTTP_Exception::factory(404,'Данного пользователя нет');
			}
		
		$newpass=Text::random('hexdec', 6);
		
		DB::update('users')->set(array('password'=>Auth::instance()->hash_password($newpass)))->where('id','=',$user->id)->execute();
		
		$email = Kohana::$config->load('email');
		Email::connect($email);
	
		$to = $user->email;
		$subject = 'Восстановление доступа';
		$from = $email->from_email;
		$message =  View::factory('user/auth/email/forgot')->bind('newpass',$newpass)->render();
 
		Email::send($to, $from, $subject, $message, $html = true);
		
		$this->message='На вашу почту было отправлено письмо с новым паролем';
		
		$this->template->content=View::factory('user/auth/forgotok');
		return TRUE;
		} else {
			$this->error=$data->errors('validation');
		}
	}
	
	
    $this->template->content=View::factory('user/auth/forgot');
	}
	
	public function action_logout()
	{   
	$this->auth->logout();
	HTTP::redirect(URL::site());
	}

 

} // End Auth