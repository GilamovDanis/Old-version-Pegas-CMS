<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Error extends Controller_Template {

    public $template='error';
 
    public function before()
    {   
	    Kohana::add_path('themes/default/');
        parent::before();
 
        // Получаем статус ошибки
        $status = (int) $this->request->action();

        // Получаем сообщение об ошибке
        if (Request::$initial !== Request::$current)
        {
            $message = rawurldecode($this->request->param('message'));
                    
            if ($message) {
                $this->template->message = $message;
            } 
        }
        else
        {
            $this->request->action(404);
			$this->template->message = View::factory('error/'.$status);
        }
        $this->response->status($status);
    }
 
     public function action_404()
    {
        $this->template->title = 'File Not Found';
    }

    public function action_503()
    {
        $this->template->title = 'Service Temporarily Unavailable';
    }

    public function action_500()
    {
        $this->template->title = 'Internal Server Error';
    }
 
} // End Error
