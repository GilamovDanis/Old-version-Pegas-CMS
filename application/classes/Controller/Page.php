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
	$this->template->error=array();
	$this->template->message=array();
    }
	
	public function error($error) {
	  if (is_array($error)) {
	   foreach ($error as $errors) {
	    if (is_array($errors)) {
	    return self::error($errors);
	    }
	   $this->template->error[]=$errors;
	   }
	  } else {
	  return $this->template->error[]=$error;
	  }
	}
	
	public function message($message) {
	  if (is_array($message)) {
	   foreach ($message as $messages) {
	   $this->template->message[]=$messages;
	   }
	  } else {
	  return $this->template->message[]=$message;
	  }
	}
	
	public function after()
	{
	View::set_global(array(
    'title' => !isset($this->template->title)?$this->config->get('title'):$this->template->title,
	'keywords' => !isset($this->template->keywords)?$this->config->get('keywords'):$this->template->keywords,
    'description' => !isset($this->template->description)?$this->config->get('description'):$this->template->description,
	'session' => $this->session,
	'user' => $this->user,
    ));
	
	parent::after();
	}
} // End Controller Page