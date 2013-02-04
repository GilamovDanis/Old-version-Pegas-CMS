<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Apanel_Post extends Controller_AdminPage {
	
	public function action_add()
	{
	/**
	* Добавление статьи
	**/
	$this->template->title='Добавление статьи';
	
	$blog_categories=ORM::factory('Blog_Categories');
	
	
	$this->template->jscripts[]='/tinymce/tiny_mce';
	
	$this->template->content=View::factory('blog/apanel/post/add')
		->bind('category',$blog_categories);
	$this->template->sidebarcontent=View::factory('blog/apanel/post/sidebar1');
	}
	
	public function action_delete()
	{
	/**
	* Удаление статьи
	**/
	$id = $this->request->param('id');
	$post=ORM::factory('Blog_Posts',$id);
	
		if(!$post->loaded()){
			throw HTTP_Exception::factory(404,'Данной статьи нет');
		}
	
	$category=$post->category;
	
	foreach ($category->find_all() as $categories) {
	  $categories->post_count--;
	  $categories->save();
	}
	
	$post->remove('category');
	$post->delete();
	
	HTTP::redirect('/blog/');
	}
} // End Apanel Post
