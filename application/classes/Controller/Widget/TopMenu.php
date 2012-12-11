<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Widget_TopMenu extends Controller_Widget {

    public $template = 'widget/topmenu';
	
    public function action_index()
    {	
		$this->response->body(View::factory($this->template)); 
    }
}
