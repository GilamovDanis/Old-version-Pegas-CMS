<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Basic Widget Controller
**/
abstract class Controller_Widget extends Controller {
	public function before()
	{
		Kohana::add_path('themes/'.Kohana::$config->load('main')->get('web_theme').'/');
		parent::before();
    }
} // End Widget Controller