<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Blog_Post extends Controller_Page {

	public function action_index()
	{   
	/**
	* Вывод отдельной статьи
	**/
	$request_category=$this->request->param('category');
	$request_post=$this->request->param('post');
	
	$blog_posts=ORM::factory('Blog_Posts');

	$post=$blog_posts->where('post_url','=',$request_post)->find();
	$category=$blog_posts->category->where('category_url','=',$request_category)->find();
	
	if (!$category->loaded() || !$post->loaded()) {
		throw HTTP_Exception::factory(404,'Статья не найдена');
	} 
	
	$this->template->title=$post->title;
		
    $this->template->content=View::factory('blog/post')
		->bind('category',$category)
		->bind('post',$post);
	}

} // End blog
