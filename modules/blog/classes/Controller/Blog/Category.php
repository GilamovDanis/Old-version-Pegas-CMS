<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Blog_Category extends Controller_Page {

	public function action_index()
	{   
	/**
	* Вывод категории
	**/
	$request_category=$this->request->param('category');
	
	$blog_categories=ORM::factory('Blog_Categories');
	
	$category=$blog_categories->where('category_url','=',$request_category)->find();
	
	if (!$category->loaded()) {
		throw HTTP_Exception::factory(404,'Категория не найдена');
	} 

	$messages_count=$category->post->count_all();
	$pagination = Pagination::factory(array('total_items' => $messages_count));
		
	$messages=$category->post->where('status','=','publish')->order_by('created','DESC')->limit($pagination->items_per_page)->offset($pagination->offset)->find_all();
	
	$this->template->title=$category->title;
		
    $this->template->content=View::factory('blog/category')
		->bind('messages',$messages)
		->bind('pagination',$pagination)
		->bind('category',$category);
	}
	
	public function action_all()
	{   
	/**
	* Вывод категории
	**/
	$this->template->title='Все категории';
	
	$blog_categories=ORM::factory('Blog_Categories');
		
    $this->template->content=View::factory('blog/all_category')
		->bind('messages',$blog_categories);
	}
	
} // End Category