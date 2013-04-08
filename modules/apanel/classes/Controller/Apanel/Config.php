<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Apanel_Config extends Controller_AdminPage {

	public function action_index()
	{   
	/**
	* Вывод файлов
	**/
	$this->template->title='Админ панель';
	
	if (HTTP_Request::POST==Request::current()->method()) {
	$data = Arr::extract(Request::current()->post(), array('title', 'theme','admin_theme'));
	$data = Arr::map('Security::xss_clean', $data);
	
	$data = Validation::factory($data)->rule('title' , 'not_empty')
									  ->rule('theme' , 'not_empty')
									  ->rule('admin_theme' , 'not_empty');
									  
			if ($data->check()) {
			$this->config['title']=$data['title'];
			$this->config['theme']=$data['theme'];
			$this->config['admin_theme']=$data['admin_theme'];
			$this->config->save();

			$this->message='Запись обновлена';
			} else {
				$this->error=$data->errors('validation');
			}
	}
	
    $this->template->content=View::factory('apanel/config/main')
		->bind('config',$this->config);
	}

} // End Apanel
