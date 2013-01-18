<?php defined('SYSPATH') or die('No direct script access.'); 
 
abstract class Controller_AdminPage extends Controller_Page {  
   
    public function before()
    {
	if(!Auth::instance()->logged_in('admin'))  Request::initial()->redirect(URL::site());
	
    return parent::before();
    }
}