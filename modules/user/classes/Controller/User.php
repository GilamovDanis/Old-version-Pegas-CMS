<?php defined('SYSPATH') or die('No direct script access.');

class Controller_User extends Controller_Page {


	public function action_index()
	{
	$id = $this->request->param('id');
	
	if (is_numeric($id)) {
	$user=ORM::factory('User',$id);
	} else {
	$user=ORM::factory('User',array('username' => $id));
	}
	
	if(!$user->loaded()){
			throw HTTP_Exception::factory(404,'Данного пользователя нет');
	}
	
	$this->template->title = $user->username;
	
	$this->template->content = View::factory('/user/main')->bind('profile_user',$user);
	}
	
	public function action_edit()
	{   
	$id = $this->request->param('id');
	
	if (is_numeric($id)) {
	$user=ORM::factory('User',$id);
	} else {
	$user=ORM::factory('User',array('username' => $id));
	}
	
	if(!$user->loaded()){
			throw HTTP_Exception::factory(404,'Данного пользователя нет');
	}
	
	if(!$this->user->id==$user->id) {
			if(!Auth::instance()->logged_in('admin')) { 
			throw HTTP_Exception::factory(404,'Нет доступа');
			}
	}
	
	
	if (HTTP_Request::POST==Request::current()->method()) {
		 $data = Arr::extract(Request::current()->post(), array('username', 'email','phone', 'password', 'password_confirm', 'captcha'));
		 $data = Arr::map('Security::xss_clean', $data);
		 
         try {
         $user->update_user($data, array('username','password','email','phone'));
		  
		 $this->message='Данные отредактированы';
         } catch (ORM_Validation_Exception $e) {
           $this->error=$e->errors('validation'); 
         }
	}
	
	// Обновление модели
	if (is_numeric($id)) {
	$user=ORM::factory('User',$id);
	} else {
	$user=ORM::factory('User',array('username' => $id));
	}
	
	$this->template->content = View::factory('/user/edit')->bind('profile_user',$user);
	}

 

} // End Auth