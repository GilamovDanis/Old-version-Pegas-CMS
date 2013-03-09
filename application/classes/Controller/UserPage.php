<?php defined('SYSPATH') or die('No direct script access.'); 
 
abstract class Controller_UserPage extends Controller_Page {  
   
    public function before()
    {
	if(!Auth::instance()->logged_in())  HTTP::redirect(URL::site());
	
    return parent::before();
    }
}