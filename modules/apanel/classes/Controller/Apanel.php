<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Apanel extends Controller_AdminPage {

	public function action_index()
	{   
	/**
	* Вывод файлов
	**/
	$this->template->title='Админ панель';
	
    $this->template->content=View::factory('apanel/main');
	}
	
} // End Apanel
