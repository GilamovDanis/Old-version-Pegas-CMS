<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Widget_RightSidebar extends Controller_Widget
{
    public $template = 'widget/rightsidebar';

    public function action_index()
    {
		$this->response->body(View::factory($this->template)); 
    }
}
