<?php defined('SYSPATH') or die('No direct script access.');

class Controller_News extends Page {

	public function action_index()
	{   
	$news=ORM::factory('news');
    
	$messages_count=$news->count_all();
	$pagination = Pagination::factory(array('total_items' => $messages_count));
		
	$messages = $news->order_by('created','DESC')->limit($pagination->items_per_page)->offset($pagination->offset)->find_all();
	
	$this->template->fullcontent=true;
    $this->template->content=View::factory('news/main')
		->bind('messages',$messages)
		->bind('pagination',$pagination);
	}
	
	public function action_add()
	{
	$this->template->title = 'Добавление Объявления';	
	
	$news=ORM::factory('news');
	
		if ($_POST) {
		$data = Arr::extract($_POST, array('name', 'content','captcha'));
		$data = Arr::map('HTML::chars', $data);
	    
		
			if (!$this->user) {
			$data = Validation::factory($data)->rule('name' , 'not_empty')
											  ->rule('name' , 'min_length', array(':value', 2))
										      ->rule('name' , 'max_length', array(':value', 64))
											  ->rule('captcha' , 'Model_User::captcha_valid')
											  ->rule('name' , 'Model_User::login_valid')
											  ->rule('name' , 'Model_news::unique_key')
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
					$news->name=$data['name'];
					$news->content=$data['content'];
					$news->created=time();
				} else {
					$news->name=$this->user->username;
					$news->content=$data['content'];
					$news->created=time();
				}
				
				$news->save();
			
			Request::initial()->redirect('/news/');
			} else {
				page::error($data->errors('news'));
			}
		}
	
	$this->template->content = View::factory('/news/add');
	}
	
	public function action_delete()
	{
	$id = $this->request->param('id');
	$news=ORM::factory('news',$id);
	
		if(!$news->loaded()){
			throw new HTTP_Exception_404('Данного сообщения нет');
		}
			if(!Auth::instance()->logged_in('admin')){
				Request::initial()->redirect('/news/');
			}
			
	$news->delete();
	Request::initial()->redirect('/news/');
	}
} // End news
