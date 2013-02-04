<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-01-28 14:40:51 --- CRITICAL: ErrorException [ 8 ]: Undefined index: title ~ APPPATH\classes\Text.php [ 10 ] in Z:\home\localhost\Pegas-CMS\application\classes\Text.php:10
2013-01-28 14:40:51 --- DEBUG: #0 Z:\home\localhost\Pegas-CMS\application\classes\Text.php(10): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\localho...', 10, Array)
#1 Z:\home\localhost\Pegas-CMS\modules\news\views\news\main.php(19): Text::pagebreak('<p>?????????? ?...', Array)
#2 Z:\home\localhost\Pegas-CMS\system\classes\Kohana\View.php(61): include('Z:\home\localho...')
#3 Z:\home\localhost\Pegas-CMS\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\localho...', Array)
#4 Z:\home\localhost\Pegas-CMS\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\localhost\Pegas-CMS\themes\default\views\default.php(37): Kohana_View->__toString()
#6 Z:\home\localhost\Pegas-CMS\system\classes\Kohana\View.php(61): include('Z:\home\localho...')
#7 Z:\home\localhost\Pegas-CMS\system\classes\Kohana\View.php(348): Kohana_View::capture('themes/default/...', Array)
#8 Z:\home\localhost\Pegas-CMS\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\localhost\Pegas-CMS\application\classes\Controller\Page.php(56): Kohana_Controller_Template->after()
#10 Z:\home\localhost\Pegas-CMS\system\classes\Kohana\Controller.php(87): Controller_Page->after()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\localhost\Pegas-CMS\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_News))
#13 Z:\home\localhost\Pegas-CMS\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\localhost\Pegas-CMS\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\localhost\Pegas-CMS\index.php(118): Kohana_Request->execute()
#16 {main} in Z:\home\localhost\Pegas-CMS\application\classes\Text.php:10
2013-01-28 15:00:57 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\Text.php [ 7 ] in :
2013-01-28 15:00:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-28 15:00:59 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\Text.php [ 7 ] in :
2013-01-28 15:00:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-28 15:01:12 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\Text.php [ 7 ] in :
2013-01-28 15:01:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-28 15:03:47 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_PUBLIC ~ APPPATH\classes\Text.php [ 22 ] in :
2013-01-28 15:03:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-28 15:04:42 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_PUBLIC ~ APPPATH\classes\Text.php [ 22 ] in :
2013-01-28 15:04:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :