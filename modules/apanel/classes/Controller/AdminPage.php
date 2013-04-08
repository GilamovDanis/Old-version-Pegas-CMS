<?php defined('SYSPATH') or die('No direct script access.'); 
 
abstract class Controller_AdminPage extends Controller_Template {  
  
	public $template='admin';
	public $config=array();
	public $theme_config=array();
	public $session;
	public $auth;
	public $user;
	
	public $error=array();
	public $message=array();
	
	
	public function before()
	{
	if(!Auth::instance()->logged_in('admin'))  HTTP::redirect(URL::site());
	
	$this->config=Kohana::$config->load('main');
	
		Kohana::add_path('themes/'.$this->config->get('admin_theme').'/');
		parent::before();
	
	/**
	* Получение настроек самой темы оформления
	*/
	$this->theme_config=Kohana::$config->load('theme_'.$this->config->get('admin_theme'));
	
	/**
	* Идентификация пользователя
	*/
	$this->session = Session::instance();
	$this->auth = Auth::instance();
	$this->user = $this->auth->get_user();
	
	$this->template->styles=$this->theme_config['styles'];
	$this->template->jscripts=$this->theme_config['jscripts'];;
    }
	
	
	public function after()
	{
	View::set_global(array(
    'title' 	  => !isset($this->template->title)?$this->config->get('title'):$this->template->title,
	'session' 	  => $this->session,
	'user' 	      => $this->user,
	'error' 	  => $this->error,
	'message'	  => $this->message,
    ));
	
	parent::after();
	}
}