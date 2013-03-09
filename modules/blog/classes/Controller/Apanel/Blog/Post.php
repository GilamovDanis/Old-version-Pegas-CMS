<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Apanel_Blog_Post extends Controller_AdminPage {
	
	public function action_add()
	{
	/**
	* Добавление статьи
	**/
	$this->template->title='Добавление Видео';
	
	$blog_categories=ORM::factory('Blog_Categories');
	$blog=ORM::factory('Blog_Posts');
	
	if ($_POST) {
	$data=Arr::extract($_POST, array('title', 'category_id','content','tags'));
	$data=Arr::map('Security::xss_clean', $data);
	
	
	$data = Validation::factory($data)->rule('title' , 'not_empty')
									  ->rule('title' , 'min_length', array(':value', 4))
                                      ->rule('title' , 'max_length', array(':value', 128))
                                      ->rule('content' , 'max_length', array(':value', 1024))
									  ->rule('category_id', 'digit')
									  ->rule('category_id' , 'range', array(':value', 0,1000));				 
								
		if ($data->check()) {
		$blog->post_url=Text::translit($data['title']);
		$blog->user_id=$this->user->id;
				 
					if(Auth::instance()->logged_in('admin')) {
					$blog->status='publish';
					} else {
					$blog->status='moderation';
					}
				
		$blog->title=$data['title'];
		$blog->content=$data['content'];
		$blog->created=time();
		$blog->save();
		
		$category_id=ORM::factory('Blog_Categories',$data['category_id']);	
				 
		$blog->add('category',$data['category_id']);
				 
		if ($category_id->category_id) {
			$blog->add('category',$category_id->category_id);
		}
		
			
		HTTP::redirect('blog/'.$category_id->category_url.'/'.$blog->post_url);
		} else {
			$this->error=$post_data->errors('blog');
		}
	}	

	$this->template->jscripts[]='/tinymce/tiny_mce';
	
	$this->template->content=View::factory('blog/apanel/post/add')
		->bind('category',$blog_categories);
	}
	
	public function action_delete()
	{
	/**
	* Удаление видео
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
