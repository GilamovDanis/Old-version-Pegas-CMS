<?php defined('SYSPATH') or die('No direct script access.'); 
 
abstract class Page extends Controller_Template {  
    public $template = 'default';
	public $error=array();
	public $message=array();
    public $main_config;
	public $session;
	public $title;
	public $keywords;
	public $description;
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
	
	$this->template->styles = array('main','form','post');
	$this->template->fullcontent=true;
	
	//$this->template->scripts = '';
	
	
    }
	
	public function error($error) {
	  if (is_array($error)) {
	   foreach ($error as $errors) {
	    if (is_array($errors)) {
	    return self::error($errors);
	    }
	   $this->error[]=$errors;
	   }
	  } else {
	  return $this->error[]=$error;
	  }
	}
	
	public function message($message) {
	  if (is_array($message)) {
	   foreach ($message as $messages) {
	   $this->message[]=$messages;
	   }
	  } else {
	  return $this->message[]=$message;
	  }
	}
	
	public function after()
	{
	View::set_global(array(
    'title' => !isset($this->title)?$this->main_config->get('title'):$this->title,
	'keywords' => !isset($this->keywords)?$this->main_config->get('keywords'):$this->keywords,
    'description' => !isset($this->description)?$this->main_config->get('description'):$this->description,
	'session' => $this->session,
	'user' => $this->user,
	'error' => $this->error,
	'message' => $this->message,
	'view_captcha' => Captcha::instance()->render()
    ));
	
	parent::after();
	}
	
}
