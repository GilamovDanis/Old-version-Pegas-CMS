<?php defined('SYSPATH') or die('No direct script access.'); 
 
abstract class Page extends Controller_Template {  

    public $template = 'default';
    public $main_config;
	public $session;
	public $auth;
	public $user;
 
    public function before()
    {
	/**
	* Èäåíòèôèêàöèÿ ïîëüçîâàòåëÿ
	*/
	$this->session = Session::instance();
	$this->auth = Auth::instance();
	$this->user = $this->auth->get_user();
	
	/**
	* Ïîëó÷åíèå îñíîâíûõ íàñòğîåê
	**/
	$this->main_config = Kohana::$config->load('main');
	
    Kohana::add_path('themes/'.$this->main_config->get('web_theme').'/');
    parent::before();
	
	$this->template->styles=array('main','form','post');
	$this->template->error=array();
	$this->template->message=array();
	
	$this->template->fullcontent=false;
	
	//$this->template->scripts = '';
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
    'title' => !isset($this->template->title)?$this->main_config->get('title'):$this->template->title,
	'keywords' => !isset($this->template->keywords)?$this->main_config->get('keywords'):$this->template->keywords,
    'description' => !isset($this->template->description)?$this->main_config->get('description'):$this->template->description,
	'session' => $this->session,
	'user' => $this->user,
    ));
	
	parent::after();
	}
	
}
