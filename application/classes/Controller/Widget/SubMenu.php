<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Widget_SubMenu extends Controller_Widget {

    public $template = 'widget/submenu';
	
    public function action_index()
    {	
		$this->response->body(View::factory($this->template)); 
    }
}
