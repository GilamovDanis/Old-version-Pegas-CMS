<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-03-26 21:30:57 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: cfg ~ MODPATH\ulogin\views\ulogin\ulogin.php [ 3 ] in J:\xampp\htdocs\Pegas-CMS\modules\ulogin\views\ulogin\ulogin.php:3
2013-03-26 21:30:57 --- DEBUG: #0 J:\xampp\htdocs\Pegas-CMS\modules\ulogin\views\ulogin\ulogin.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'J:\xampp\htdocs...', 3, Array)
#1 J:\xampp\htdocs\Pegas-CMS\system\classes\Kohana\View.php(61): include('J:\xampp\htdocs...')
#2 J:\xampp\htdocs\Pegas-CMS\system\classes\Kohana\View.php(348): Kohana_View::capture('J:\xampp\htdocs...', Array)
#3 J:\xampp\htdocs\Pegas-CMS\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 J:\xampp\htdocs\Pegas-CMS\themes\default\views\auth\main.php(5): Kohana_View->__toString()
#5 J:\xampp\htdocs\Pegas-CMS\system\classes\Kohana\View.php(61): include('J:\xampp\htdocs...')
#6 J:\xampp\htdocs\Pegas-CMS\system\classes\Kohana\View.php(348): Kohana_View::capture('themes/default/...', Array)
#7 J:\xampp\htdocs\Pegas-CMS\system\classes\Kohana\View.php(228): Kohana_View->render()
#8 J:\xampp\htdocs\Pegas-CMS\themes\default\views\default.php(61): Kohana_View->__toString()
#9 J:\xampp\htdocs\Pegas-CMS\system\classes\Kohana\View.php(61): include('J:\xampp\htdocs...')
#10 J:\xampp\htdocs\Pegas-CMS\system\classes\Kohana\View.php(348): Kohana_View::capture('themes/default/...', Array)
#11 J:\xampp\htdocs\Pegas-CMS\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#12 J:\xampp\htdocs\Pegas-CMS\application\classes\Controller\Page.php(53): Kohana_Controller_Template->after()
#13 J:\xampp\htdocs\Pegas-CMS\system\classes\Kohana\Controller.php(87): Controller_Page->after()
#14 [internal function]: Kohana_Controller->execute()
#15 J:\xampp\htdocs\Pegas-CMS\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#16 J:\xampp\htdocs\Pegas-CMS\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#17 J:\xampp\htdocs\Pegas-CMS\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#18 J:\xampp\htdocs\Pegas-CMS\index.php(133): Kohana_Request->execute()
#19 {main} in J:\xampp\htdocs\Pegas-CMS\modules\ulogin\views\ulogin\ulogin.php:3
2013-03-26 21:51:17 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'providers' (T_STRING), expecting ')' ~ MODPATH\ulogin\config\ulogin.php [ 12 ] in :
2013-03-26 21:51:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-26 22:39:17 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'if' (T_IF), expecting function (T_FUNCTION) ~ APPPATH\classes\Controller\Auth.php [ 25 ] in :
2013-03-26 22:39:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-26 23:07:19 --- CRITICAL: ErrorException [ 1 ]: Class 'Ulogin' not found ~ APPPATH\classes\Controller\Auth.php [ 13 ] in :
2013-03-26 23:07:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-26 23:07:22 --- CRITICAL: ErrorException [ 1 ]: Class 'Ulogin' not found ~ APPPATH\classes\Controller\Auth.php [ 13 ] in :
2013-03-26 23:07:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-26 23:07:24 --- CRITICAL: ErrorException [ 1 ]: Class 'Ulogin' not found ~ APPPATH\classes\Controller\Auth.php [ 13 ] in :
2013-03-26 23:07:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-26 23:07:53 --- CRITICAL: ErrorException [ 1 ]: Class 'Ulogin' not found ~ APPPATH\classes\Controller\Auth.php [ 13 ] in :
2013-03-26 23:07:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-26 23:07:54 --- CRITICAL: ErrorException [ 1 ]: Class 'Ulogin' not found ~ APPPATH\classes\Controller\Auth.php [ 13 ] in :
2013-03-26 23:07:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-26 23:07:55 --- CRITICAL: ErrorException [ 1 ]: Class 'Ulogin' not found ~ APPPATH\classes\Controller\Auth.php [ 13 ] in :
2013-03-26 23:07:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-26 23:07:56 --- CRITICAL: ErrorException [ 1 ]: Class 'Ulogin' not found ~ APPPATH\classes\Controller\Auth.php [ 13 ] in :
2013-03-26 23:07:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-26 23:07:56 --- CRITICAL: ErrorException [ 1 ]: Class 'Ulogin' not found ~ APPPATH\classes\Controller\Auth.php [ 13 ] in :
2013-03-26 23:07:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-26 23:07:56 --- CRITICAL: ErrorException [ 1 ]: Class 'Ulogin' not found ~ APPPATH\classes\Controller\Auth.php [ 13 ] in :
2013-03-26 23:07:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-26 23:07:56 --- CRITICAL: ErrorException [ 1 ]: Class 'Ulogin' not found ~ APPPATH\classes\Controller\Auth.php [ 13 ] in :
2013-03-26 23:07:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-26 23:09:20 --- CRITICAL: ErrorException [ 1 ]: Class 'Ulogin' not found ~ APPPATH\classes\Controller\Auth.php [ 13 ] in :
2013-03-26 23:09:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-26 23:10:28 --- CRITICAL: ErrorException [ 1 ]: Class 'Ulogin' not found ~ APPPATH\classes\Controller\Auth.php [ 13 ] in :
2013-03-26 23:10:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-26 23:10:29 --- CRITICAL: ErrorException [ 1 ]: Class 'Ulogin' not found ~ APPPATH\classes\Controller\Auth.php [ 13 ] in :
2013-03-26 23:10:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-26 23:10:36 --- CRITICAL: ErrorException [ 1 ]: Class 'Ulogin' not found ~ APPPATH\classes\Controller\Auth.php [ 13 ] in :
2013-03-26 23:10:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-26 23:11:51 --- CRITICAL: ErrorException [ 8 ]: Undefined index: username ~ APPPATH\classes\Controller\Auth.php [ 30 ] in J:\xampp\htdocs\Pegas-CMS\application\classes\Controller\Auth.php:30
2013-03-26 23:11:51 --- DEBUG: #0 J:\xampp\htdocs\Pegas-CMS\application\classes\Controller\Auth.php(30): Kohana_Core::error_handler(8, 'Undefined index...', 'J:\xampp\htdocs...', 30, Array)
#1 J:\xampp\htdocs\Pegas-CMS\system\classes\Kohana\Controller.php(84): Controller_Auth->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 J:\xampp\htdocs\Pegas-CMS\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 J:\xampp\htdocs\Pegas-CMS\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 J:\xampp\htdocs\Pegas-CMS\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 J:\xampp\htdocs\Pegas-CMS\index.php(133): Kohana_Request->execute()
#7 {main} in J:\xampp\htdocs\Pegas-CMS\application\classes\Controller\Auth.php:30