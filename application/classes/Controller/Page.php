<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Basic Controller Page
**/
abstract class Controller_Page extends Controller_Template {

	public $template='default';
	public $config=array();
	public $session;
	public $auth;
	public $user;
	
	public $error=array();
	public $message=array();
	
	
	public function before()
	{
	$this->config=Kohana::$config->load('main');
	
		Kohana::add_path('themes/'.$this->config->get('web_theme').'/');
		parent::before();
	/**
	* Идентификация пользователя
	*/
	$this->session = Session::instance();
	$this->auth = Auth::instance();
	$this->user = $this->auth->get_user();
	
	$this->template->fullcontent=FALSE;
    }
	
	
	public function after()
	{
	View::set_global(array(
    'title' 	  => !isset($this->template->title)?$this->config->get('title'):$this->template->title,
	'keywords'    => !isset($this->template->keywords)?$this->config->get('keywords'):$this->template->keywords,
    'description' => !isset($this->template->description)?$this->config->get('description'):$this->template->description,
	'session' 	  => $this->session,
	'user' 	      => $this->user,
	'error' 	  => $this->error,
	'message'	  => $this->message,
    ));
	
	parent::after();
	}
} // End Controller Page