<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Blog_Post extends Controller_Page {

	public function action_index()
	{   
	/**
	* Вывод отдельной статьи
	**/
	$blog_posts=ORM::factory('Blog_Posts');
	$blog_categories=ORM::factory('Blog_Categories');
	
	$request_category=$this->request->param('category');
	$request_post=$this->request->param('post');
	
	$category=$blog_categories->where('category_url','=',$request_category)->find();
	$post=$blog_posts->where('post_url','=',$request_post)->find();
	
	if (!$category->loaded() || !$post->loaded()) {
		throw HTTP_Exception::factory(404,'Статья не найдена');
	} 
	
	$this->template->title=$post->title;
		
	$this->template->fullcontent=true;
    $this->template->content=View::factory('blog/post')
		->bind('category',$category)
		->bind('post',$post);
	}

} // End Blog
