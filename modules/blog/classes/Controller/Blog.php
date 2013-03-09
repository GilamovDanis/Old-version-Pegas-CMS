<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Blog extends Controller_Page {

	public function action_index()
	{   
	/**
	* Вывод статей
	**/
	$this->template->title='Блог';
	
	$blog_posts=ORM::factory('Blog_Posts');
    
	$messages_count=$blog_posts->count_all();
	$pagination = Pagination::factory(array('total_items' => $messages_count));
		
	$messages = $blog_posts->where('status','=','publish')->order_by('created','DESC')->limit($pagination->items_per_page)->offset($pagination->offset)->find_all();
	
    $this->template->content=View::factory('blog/main')
		->bind('messages',$messages)
		->bind('pagination',$pagination);
	}
	
} // End Blog