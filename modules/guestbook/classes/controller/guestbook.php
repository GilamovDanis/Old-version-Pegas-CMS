<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Guestbook extends Page {

	public function action_index()
	{   
	$guestbook=ORM::factory('guestbook');
    
	$messages_count=$guestbook->count_all();
	$pagination = Pagination::factory(array('total_items' => $messages_count));
		
	$messages = $guestbook->order_by('created','DESC')->limit($pagination->items_per_page)->offset($pagination->offset)->find_all();

    $this->template->content = View::factory('/guestbook/main')
		->bind('messages',$messages)
		->bind('pagination',$pagination);
	}
	
	public function action_add()
	{
	$this->title = '���������� ����������';	
	
	$guestbook=ORM::factory('guestbook');
	
		if ($_POST) {
		$data = Arr::extract($_POST, array('name', 'content'));
		$data = Arr::map('HTML::chars', $data);
	
		$data = Validation::factory($data)->rule('name' , 'not_empty')
										  ->rule('name' , 'min_length', array(':value', 2))
										  ->rule('name' , 'max_length', array(':value', 64))
										  ->rule('content' , 'not_empty')
										  ->rule('content' , 'min_length', array(':value', 4))
										  ->rule('content' , 'max_length', array(':value', 1024));
			if ($data->check()) {
				$guestbook->name=$data['name'];
				$guestbook->content=$data['content'];
				$guestbook->created=time();
				$guestbook->save();
			
			Request::initial()->redirect('/guestbook/');
			} else {
				page::error($data->errors('guestbook'));
			}
		}
	
	$this->template->content = View::factory('/guestbook/add');
	}
	
	public function action_delete()
	{
	$id = $this->request->param('id');
	$guestbook=ORM::factory('guestbook',$id);
	
		if(!$guestbook->loaded()){
			throw new HTTP_Exception_404('������� ��������� ���');
		}
			if(!Auth::instance()->logged_in('admin')){
				Request::initial()->redirect('/guestbook/');
			}
			
	$guestbook->delete();
	Request::initial()->redirect('/guestbook/');
	}
} // End Guestbook
