<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Apanel_Main extends AdminPage {

	public function action_index()
	{   
        $this->template->content = View::factory('/apanel/main');
	}

} // End Main
