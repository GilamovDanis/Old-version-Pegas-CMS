<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Widget_ListNews extends Controller_Widget {

    public $template = 'widget/listnews';
	
    public function action_index()
    {	
	$news=ORM::factory('News');
	$messages=$news->order_by('created','DESC')->limit(5)->find_all();
		
	$content=View::factory($this->template)->bind('messages',$messages);
		
	$this->response->body($content); 
    }
}
