<?php defined('SYSPATH') or die('No direct script access.');

class Controller_About extends Controller_Page {

	public function action_index()
	{   
	    $this->template->title = 'О Pegas CMS';
		
		$this->template->fullcontent=TRUE;
        $this->template->content = View::factory('/pages/about');
	}

} // End Main
