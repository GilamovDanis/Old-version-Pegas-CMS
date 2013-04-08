<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-03-19 18:17:11 --- CRITICAL: View_Exception [ 0 ]: The requested view default could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in J:\xampp\htdocs\Pegas-CMS\system\classes\Kohana\View.php:137
2013-03-19 18:17:11 --- DEBUG: #0 J:\xampp\htdocs\Pegas-CMS\system\classes\Kohana\View.php(137): Kohana_View->set_filename('default')
#1 J:\xampp\htdocs\Pegas-CMS\system\classes\Kohana\View.php(30): Kohana_View->__construct('default', NULL)
#2 J:\xampp\htdocs\Pegas-CMS\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('default')
#3 J:\xampp\htdocs\Pegas-CMS\application\classes\Controller\Page.php(24): Kohana_Controller_Template->before()
#4 J:\xampp\htdocs\Pegas-CMS\system\classes\Kohana\Controller.php(69): Controller_Page->before()
#5 [internal function]: Kohana_Controller->execute()
#6 J:\xampp\htdocs\Pegas-CMS\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 J:\xampp\htdocs\Pegas-CMS\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 J:\xampp\htdocs\Pegas-CMS\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 J:\xampp\htdocs\Pegas-CMS\index.php(129): Kohana_Request->execute()
#10 {main} in J:\xampp\htdocs\Pegas-CMS\system\classes\Kohana\View.php:137
2013-03-19 18:20:15 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: keywords ~ DOCROOT\themes\default\views\default.php [ 6 ] in J:\xampp\htdocs\Pegas-CMS\themes\default\views\default.php:6
2013-03-19 18:20:15 --- DEBUG: #0 J:\xampp\htdocs\Pegas-CMS\themes\default\views\default.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'J:\xampp\htdocs...', 6, Array)
#1 J:\xampp\htdocs\Pegas-CMS\system\classes\Kohana\View.php(61): include('J:\xampp\htdocs...')
#2 J:\xampp\htdocs\Pegas-CMS\system\classes\Kohana\View.php(348): Kohana_View::capture('themes/default/...', Array)
#3 J:\xampp\htdocs\Pegas-CMS\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 J:\xampp\htdocs\Pegas-CMS\application\classes\Controller\Page.php(53): Kohana_Controller_Template->after()
#5 J:\xampp\htdocs\Pegas-CMS\system\classes\Kohana\Controller.php(87): Controller_Page->after()
#6 [internal function]: Kohana_Controller->execute()
#7 J:\xampp\htdocs\Pegas-CMS\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#8 J:\xampp\htdocs\Pegas-CMS\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 J:\xampp\htdocs\Pegas-CMS\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 J:\xampp\htdocs\Pegas-CMS\index.php(129): Kohana_Request->execute()
#11 {main} in J:\xampp\htdocs\Pegas-CMS\themes\default\views\default.php:6
2013-03-19 18:20:18 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: keywords ~ DOCROOT\themes\default\views\default.php [ 6 ] in J:\xampp\htdocs\Pegas-CMS\themes\default\views\default.php:6
2013-03-19 18:20:18 --- DEBUG: #0 J:\xampp\htdocs\Pegas-CMS\themes\default\views\default.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'J:\xampp\htdocs...', 6, Array)
#1 J:\xampp\htdocs\Pegas-CMS\system\classes\Kohana\View.php(61): include('J:\xampp\htdocs...')
#2 J:\xampp\htdocs\Pegas-CMS\system\classes\Kohana\View.php(348): Kohana_View::capture('themes/default/...', Array)
#3 J:\xampp\htdocs\Pegas-CMS\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 J:\xampp\htdocs\Pegas-CMS\application\classes\Controller\Page.php(53): Kohana_Controller_Template->after()
#5 J:\xampp\htdocs\Pegas-CMS\system\classes\Kohana\Controller.php(87): Controller_Page->after()
#6 [internal function]: Kohana_Controller->execute()
#7 J:\xampp\htdocs\Pegas-CMS\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#8 J:\xampp\htdocs\Pegas-CMS\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 J:\xampp\htdocs\Pegas-CMS\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 J:\xampp\htdocs\Pegas-CMS\index.php(129): Kohana_Request->execute()
#11 {main} in J:\xampp\htdocs\Pegas-CMS\themes\default\views\default.php:6