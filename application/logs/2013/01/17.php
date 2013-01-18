<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-01-17 20:41:19 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH\blog\views\blog\post.php [ 24 ] in Z:\home\localhost\Pegas-CMS\modules\blog\views\blog\post.php:24
2013-01-17 20:41:19 --- DEBUG: #0 Z:\home\localhost\Pegas-CMS\modules\blog\views\blog\post.php(24): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\localho...', 24, Array)
#1 Z:\home\localhost\Pegas-CMS\system\classes\Kohana\View.php(61): include('Z:\home\localho...')
#2 Z:\home\localhost\Pegas-CMS\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\localho...', Array)
#3 Z:\home\localhost\Pegas-CMS\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\localhost\Pegas-CMS\themes\default\views\default.php(27): Kohana_View->__toString()
#5 Z:\home\localhost\Pegas-CMS\system\classes\Kohana\View.php(61): include('Z:\home\localho...')
#6 Z:\home\localhost\Pegas-CMS\system\classes\Kohana\View.php(348): Kohana_View::capture('themes/default/...', Array)
#7 Z:\home\localhost\Pegas-CMS\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\localhost\Pegas-CMS\application\classes\Controller\Page.php(47): Kohana_Controller_Template->after()
#9 Z:\home\localhost\Pegas-CMS\system\classes\Kohana\Controller.php(87): Controller_Page->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\localhost\Pegas-CMS\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog_Post))
#12 Z:\home\localhost\Pegas-CMS\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\localhost\Pegas-CMS\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\localhost\Pegas-CMS\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\localhost\Pegas-CMS\modules\blog\views\blog\post.php:24
2013-01-17 21:55:20 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: nothing to repeat at offset 24 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-01-17 21:55:20 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'Z:\home\localho...', 420, Array)
#1 Z:\home\localhost\Pegas-CMS\system\classes\Kohana\Route.php(420): preg_match('#^blog/(?P<cate...', 'blog/testovoya-...', NULL)
#2 Z:\home\localhost\Pegas-CMS\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 Z:\home\localhost\Pegas-CMS\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 Z:\home\localhost\Pegas-CMS\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-01-17 21:55:22 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: nothing to repeat at offset 24 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-01-17 21:55:22 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'Z:\home\localho...', 420, Array)
#1 Z:\home\localhost\Pegas-CMS\system\classes\Kohana\Route.php(420): preg_match('#^blog/(?P<cate...', 'blog/testovoya-...', NULL)
#2 Z:\home\localhost\Pegas-CMS\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 Z:\home\localhost\Pegas-CMS\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 Z:\home\localhost\Pegas-CMS\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-01-17 22:35:58 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=', expecting ')' ~ MODPATH\blog\views\blog\post.php [ 30 ] in :
2013-01-17 22:35:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-17 22:36:13 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=', expecting ')' ~ MODPATH\blog\views\blog\post.php [ 30 ] in :
2013-01-17 22:36:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-17 22:37:06 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ MODPATH\blog\views\blog\post.php [ 30 ] in :
2013-01-17 22:37:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :