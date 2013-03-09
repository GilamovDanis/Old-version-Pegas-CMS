<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Widget_BlogSubMenu extends Controller_Widget {

    public $template = 'widget/blogsubmenu';
	
    public function action_index()
    {	
		$blog_categories=ORM::factory('Blog_Categories');
		
		$this->response->body(View::factory($this->template)->bind('category_list',$blog_categories)); 
    }
}
