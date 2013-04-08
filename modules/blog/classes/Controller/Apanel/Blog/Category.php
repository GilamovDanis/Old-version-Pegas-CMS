<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Apanel_Blog_Category extends Controller_AdminPage {

	public function action_add()
	{
	/**
	* Добавление категории
	**/
	$this->template->title='Добавление категории';
	
	$blog_categories=ORM::factory('Blog_Categories');
	
	if (HTTP_Request::POST==Request::current()->method()) {
	$data=Arr::extract(Request::current()->post(), array('title', 'category_id','content'));
	$data=Arr::map('Security::xss_clean', $data);
			
	
	
	$data = Validation::factory($data)->rule('title' , 'not_empty')
									  ->rule('title' , 'min_length', array(':value', 3))
									  ->rule('title' , 'max_length', array(':value', 128))
									  ->rule('title' , 'Model_Blog_Categories::unique_key')
									  ->rule('content' , 'max_length', array(':value', 1024))
									  ->rule('category_id', 'digit');
									  
			if ($data->check()) {	
			$blog_categories->category_id=$data['category_id'];
			$blog_categories->category_url=Text::translit($data['title']);
			$blog_categories->title=$data['title'];
			$blog_categories->content=$data['content'];
			$blog_categories->created=time();
			$blog_categories->post_count=0;
			$blog_categories->save();	
			
			HTTP::redirect('blog/');
			} else {
				$this->error=$data->errors('blog');
			}
	}	

	$this->template->jscripts[]='/tinymce/tiny_mce';
	
	$this->template->content=View::factory('blog/apanel/category/add')
		->bind('category',$blog_categories);
	}
	
	public function action_delete()
	{
	/**
	* Удаление категории
	**/
	$id = $this->request->param('id');
	$category=ORM::factory('Blog_Categories',$id);
	
		if(!$category->loaded()){
			throw HTTP_Exception::factory(404,'Данной категории нет');
		}
		
	$posts=$category->post;
	
	foreach ($posts->find_all() as $post) {
	  Request::factory('blog/post/delete/'.$post->id)->execute();
	}
	
	
	$category->delete();
	
	HTTP::redirect('/blog/');
	}
	
} 
