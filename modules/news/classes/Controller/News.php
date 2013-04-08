<?php defined('SYSPATH') or die('No direct script access.');

class Controller_News extends Controller_Page {

	public function action_index()
	{   
	/**
	* Вывод новостей
	**/
	$this->template->title='Новости';
	
	$news=ORM::factory('News');
    
	$messages_count=$news->count_all();
	$pagination = Pagination::factory(array('total_items' => $messages_count));
		
	$messages = $news->order_by('created','DESC')->limit($pagination->items_per_page)->offset($pagination->offset)->find_all();
	
    $this->template->content=View::factory('news/main')
		->bind('messages',$messages)
		->bind('pagination',$pagination);
	}
	
	public function action_view()
	{   
	/**
	* Вывод одной новости
	**/
	$this->template->title='Новости';
	
	$id = $this->request->param('id');
	$news=ORM::factory('News',$id);
	
		if(!$news->loaded()){
			throw HTTP_Exception::factory(404,'Данного новости нет');
		}
	
	
    $this->template->content=View::factory('news/viewnews')->bind('news',$news);
	}
	
	
	public function action_add()
	{
	/**
	* Добавление новостей
	**/
	$this->template->title ='Добавление новости';	
	
	$news=ORM::factory('News');
	
		if (HTTP_Request::POST==Request::current()->method()) {
		$data = Arr::extract(Request::current()->post(), array('title', 'content'));
		$data = Arr::map('Security::xss_clean', $data);
	    
		
			$data = Validation::factory($data)->rule('title' , 'not_empty')
											  ->rule('title' , 'min_length', array(':value', 2))
										      ->rule('title' , 'max_length', array(':value', 128))
											  ->rule('content' , 'not_empty')
										      ->rule('content' , 'min_length', array(':value', 4));
			
			if ($data->check()) {
			$news->title=$data['title'];
			$news->content=$data['content'];
			$news->created=time();
				
			$news->save();
			
			HTTP::redirect('/news/');
			} else {
				$this->error=$data->errors('news');
			}
		}
	
	$this->template->jscripts[]='/tinymce/tiny_mce';
	
	$this->template->content = View::factory('/news/add');
	}
	
	public function action_edit()
	{
	/**
	* Добавление новостей
	**/
	$this->template->title ='Добавление новости';	
	
	$id = $this->request->param('id');
	$news=ORM::factory('News',$id);
	
	if(!$news->loaded()){
			throw HTTP_Exception::factory(404,'Данного сообщения нет');
	}
	
		if (HTTP_Request::POST==Request::current()->method()) {
		$data = Arr::extract(Request::current()->post(), array('title', 'content'));
		$data = Arr::map('Security::xss_clean', $data);
	    
		
			$data = Validation::factory($data)->rule('title' , 'not_empty')
											  ->rule('title' , 'min_length', array(':value', 2))
										      ->rule('title' , 'max_length', array(':value', 128))
											  ->rule('content' , 'not_empty')
										      ->rule('content' , 'min_length', array(':value', 4));
			
			if ($data->check()) {
			$news->title=$data['title'];
			$news->content=$data['content'];
			$news->created=time();
				
			$news->save();
			
			HTTP::redirect('/news/');
			} else {
				$this->error=$data->errors('news');
			}
		}
	
	$this->template->jscripts[]='/tinymce/tiny_mce';
	
	$this->template->content = View::factory('/news/edit')->bind('news',$news);
	}
	
	public function action_delete()
	{
	/**
	* Удаление новостей
	**/
	$id = $this->request->param('id');
	$news=ORM::factory('News',$id);
	
		if(!$news->loaded()){
			throw HTTP_Exception::factory(404,'Данного сообщения нет');
		}
			if(!Auth::instance()->logged_in('admin')){
				HTTP::redirect('/news/');
			}
			
	$news->delete();
	HTTP::redirect('/news/');
	}
} // End News
