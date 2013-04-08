<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Apanel_Info extends Controller_AdminPage {

	public function action_index()
	{   
	/**
	* Вывод информации
	**/
	$this->template->title='Админ панель';
	
    $this->template->content=View::factory('apanel/info/main');
	}
	
} // End Apanel
