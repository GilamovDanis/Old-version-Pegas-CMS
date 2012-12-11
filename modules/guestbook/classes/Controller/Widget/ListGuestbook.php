<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Widget_ListGuestbook extends Controller_Widget {

	public $template = 'widget/listguestbook';

	public function action_index()
	{   
	$guestbook=ORM::factory('Guestbook');
    
	$messages=$guestbook->order_by('created','DESC')->limit(10)->find_all();
	
	$content=View::factory($this->template)->bind('messages',$messages);
		
	$this->response->body($content); 
	}	
} 