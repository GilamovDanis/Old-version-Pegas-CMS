<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Apanel_User extends Controller_AdminPage {

	public function action_index()
	{   
	/**
	* Вывод файлов
	**/
	$this->template->title='Админ панель';
	
	$user=ORM::factory('User');
    
	$messages_count=$user->count_all();
	$pagination = Pagination::factory(array('total_items' => $messages_count));
		
	$messages = $user->order_by('last_login','DESC')->limit($pagination->items_per_page)->offset($pagination->offset)->find_all();
	
	
    $this->template->content=View::factory('apanel/user/main')
		->bind('messages',$messages)
		->bind('pagination',$pagination);
	}
	
	
	public function action_add()
	{ 
	$this->template->title = 'Добавление пользователя';
	$data = array();
	
	     if (HTTP_Request::POST==Request::current()->method()) {
		 $user = ORM::factory('User');
		 
		 $data = Arr::extract(Request::current()->post(), array('username', 'email','phone', 'password', 'password_confirm', 'captcha'));
		 $data = Arr::map('Security::xss_clean', $data);
		 
         try {
         $user->create_user($data, array('username','password','email','phone'));
         $user->add('roles',ORM::factory('Role', array('name' => 'login')));
		  
		 $this->message='Пользователь успешно добавлен';
         } catch (ORM_Validation_Exception $e) {
           $this->error=$e->errors('validation'); 
         }
		}
		
	$this->template->content=View::factory('apanel/user/add');
	}
	
	public function action_delete()
	{
	/**
	* Удаление пользователя
	**/
	$id = $this->request->param('id');
	$user=ORM::factory('User',$id);
	
		if(!$user->loaded()){
			throw HTTP_Exception::factory(404,'Данного пользователя нет');
		}

	$user->delete();	
		
	HTTP::redirect('/apanel/user/');
	}
} // End Apanel
