<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Guestbook extends Controller_Page {

	public function action_index()
	{   
	/**
	* Вывод сообщений из гостевой книги
	**/
	$this->template->title ='Гостевая книга';
	
	$guestbook=ORM::factory('Guestbook');
    
	$messages_count=$guestbook->count_all();
	$pagination = Pagination::factory(array('total_items' => $messages_count));
		
	$messages = $guestbook->order_by('created','DESC')->limit($pagination->items_per_page)->offset($pagination->offset)->find_all();
	
	
	$this->template->jscripts[]='/tinymce/tiny_mce';
	
    $this->template->content=View::factory('guestbook/main')
		->bind('messages',$messages)
		->bind('pagination',$pagination);
	}
	
	
	public function action_add()
	{
	/**
	* Добавления сообщений
	**/
	$this->template->title = 'Добавление сообщения';	
	
	$guestbook=ORM::factory('Guestbook');
	
		if (HTTP_Request::POST==Request::current()->method()) {
		$data = Arr::extract(Request::current()->post(), array('name', 'content','captcha'));
		$data = Arr::map('Security::xss_clean', $data);
	    
		
			if (!$this->user) {
			$data = Validation::factory($data)->rule('name' , 'not_empty')
											  ->rule('name' , 'min_length', array(':value', 2))
										      ->rule('name' , 'max_length', array(':value', 64))
											  ->rule('captcha' , 'Model_User::captcha_valid')
											  ->rule('name' , 'Model_User::username_valid')
											  ->rule('name' , 'Model_Guestbook::unique_key')
											  ->rule('content' , 'not_empty')
										      ->rule('content' , 'min_length', array(':value', 4))
										      ->rule('content' , 'max_length', array(':value', 1024))
											  ->rule('captcha' , 'not_empty');
			} else {
			$data = Validation::factory($data)->rule('content' , 'not_empty')
										      ->rule('content' , 'min_length', array(':value', 4))
										      ->rule('content' , 'max_length', array(':value', 1024));
			}
		
			if ($data->check()) {
				if (!$this->user) {
					$guestbook->username=$data['name'];
					$guestbook->content=$data['content'];
					$guestbook->created=time();
				} else {
					$guestbook->username=$this->user->username;
					$guestbook->content=$data['content'];
					$guestbook->created=time();
				}
				
				$guestbook->save();
			
			HTTP::redirect('/guestbook/');
			} else {
				$this->error=$data->errors('guestbook');
			}
		}
	
	$this->template->jscripts[]='/tinymce/tiny_mce';
	
	$this->template->content = View::factory('/guestbook/add2');
	}
	
	public function action_delete()
	{
	/**
	* Удаление сообщений
	**/
	$id = $this->request->param('id');
	$guestbook=ORM::factory('Guestbook',$id);
	
		if(!$guestbook->loaded()){
			throw HTTP_Exception::factory(404,'Данного сообщения нет');
		}
			if(!Auth::instance()->logged_in('admin')){
				HTTP::redirect('/guestbook/');
			}
			
	$guestbook->delete();
	HTTP::redirect('/guestbook/');
	}
} // End Guestbook
