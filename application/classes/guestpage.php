<?php defined('SYSPATH') or die('No direct script access.'); 
 
abstract class GuestPage extends Page {  
   
    public function before()
    {
	if(Auth::instance()->logged_in())  Request::initial()->redirect(URL::site());

    return parent::before();
    }
	
	
}