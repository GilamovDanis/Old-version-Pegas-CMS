<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Auth extends Page {


	public function action_index()
	{
	$this->title = 'Авторизация';
	
	$data = array();
	
		if($this->auth->logged_in()) {
			Request::initial()->redirect(URL::site());
		} else {
			if ($_POST) {
			$data = Arr::extract($_POST, array('username', 'password', 'save'));
			
                 if($this->auth->login($data['username'], $data['password'], (bool)$data['save'])) {			
					Request::initial()->redirect(URL::site());
				 } else {
				    page::error('Ошибка авторизации');
				 }
			 }
		}
		$this->template->content=View::factory('auth/main');
	}
	
	public function action_logout()
	{   
	$this->auth->logout();
	Request::initial()->redirect(URL::site());
	}

 

} // End Auth