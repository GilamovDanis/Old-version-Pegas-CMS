<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-12-01 14:33:17 --- CRITICAL: ErrorException [ 1 ]: Class 'Controller' not found ~ SYSPATH\classes\Kohana\Controller\Template.php [ 11 ] in :
2012-12-01 14:33:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-01 14:35:41 --- CRITICAL: ErrorException [ 1 ]: Class 'Controller' not found ~ SYSPATH\classes\Kohana\Controller\Template.php [ 11 ] in :
2012-12-01 14:35:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-01 14:41:31 --- CRITICAL: View_Exception [ 0 ]: The requested view /pages/main could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in P:\home\localhost\Pegas-CMS\system\classes\Kohana\View.php:137
2012-12-01 14:41:31 --- DEBUG: #0 P:\home\localhost\Pegas-CMS\system\classes\Kohana\View.php(137): Kohana_View->set_filename('/pages/main')
#1 P:\home\localhost\Pegas-CMS\system\classes\Kohana\View.php(30): Kohana_View->__construct('/pages/main', NULL)
#2 P:\home\localhost\Pegas-CMS\application\classes\Controller\Main.php(7): Kohana_View::factory('/pages/main')
#3 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 P:\home\localhost\Pegas-CMS\index.php(118): Kohana_Request->execute()
#9 {main} in P:\home\localhost\Pegas-CMS\system\classes\Kohana\View.php:137
2012-12-01 14:41:32 --- CRITICAL: View_Exception [ 0 ]: The requested view /pages/main could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in P:\home\localhost\Pegas-CMS\system\classes\Kohana\View.php:137
2012-12-01 14:41:32 --- DEBUG: #0 P:\home\localhost\Pegas-CMS\system\classes\Kohana\View.php(137): Kohana_View->set_filename('/pages/main')
#1 P:\home\localhost\Pegas-CMS\system\classes\Kohana\View.php(30): Kohana_View->__construct('/pages/main', NULL)
#2 P:\home\localhost\Pegas-CMS\application\classes\Controller\Main.php(7): Kohana_View::factory('/pages/main')
#3 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 P:\home\localhost\Pegas-CMS\index.php(118): Kohana_Request->execute()
#9 {main} in P:\home\localhost\Pegas-CMS\system\classes\Kohana\View.php:137
2012-12-01 14:42:03 --- CRITICAL: View_Exception [ 0 ]: The requested view /pages/main could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in P:\home\localhost\Pegas-CMS\system\classes\Kohana\View.php:137
2012-12-01 14:42:03 --- DEBUG: #0 P:\home\localhost\Pegas-CMS\system\classes\Kohana\View.php(137): Kohana_View->set_filename('/pages/main')
#1 P:\home\localhost\Pegas-CMS\system\classes\Kohana\View.php(30): Kohana_View->__construct('/pages/main', NULL)
#2 P:\home\localhost\Pegas-CMS\application\classes\Controller\Main.php(7): Kohana_View::factory('/pages/main')
#3 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 P:\home\localhost\Pegas-CMS\index.php(118): Kohana_Request->execute()
#9 {main} in P:\home\localhost\Pegas-CMS\system\classes\Kohana\View.php:137
2012-12-01 14:42:04 --- CRITICAL: View_Exception [ 0 ]: The requested view /pages/main could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in P:\home\localhost\Pegas-CMS\system\classes\Kohana\View.php:137
2012-12-01 14:42:04 --- DEBUG: #0 P:\home\localhost\Pegas-CMS\system\classes\Kohana\View.php(137): Kohana_View->set_filename('/pages/main')
#1 P:\home\localhost\Pegas-CMS\system\classes\Kohana\View.php(30): Kohana_View->__construct('/pages/main', NULL)
#2 P:\home\localhost\Pegas-CMS\application\classes\Controller\Main.php(7): Kohana_View::factory('/pages/main')
#3 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 P:\home\localhost\Pegas-CMS\index.php(118): Kohana_Request->execute()
#9 {main} in P:\home\localhost\Pegas-CMS\system\classes\Kohana\View.php:137
2012-12-01 14:48:56 --- CRITICAL: View_Exception [ 0 ]: The requested view /pages/main could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in P:\home\localhost\Pegas-CMS\system\classes\Kohana\View.php:137
2012-12-01 14:48:56 --- DEBUG: #0 P:\home\localhost\Pegas-CMS\system\classes\Kohana\View.php(137): Kohana_View->set_filename('/pages/main')
#1 P:\home\localhost\Pegas-CMS\system\classes\Kohana\View.php(30): Kohana_View->__construct('/pages/main', NULL)
#2 P:\home\localhost\Pegas-CMS\application\classes\Controller\Main.php(7): Kohana_View::factory('/pages/main')
#3 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 P:\home\localhost\Pegas-CMS\index.php(118): Kohana_Request->execute()
#9 {main} in P:\home\localhost\Pegas-CMS\system\classes\Kohana\View.php:137
2012-12-01 14:55:46 --- CRITICAL: View_Exception [ 0 ]: The requested view /pages/main could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in P:\home\localhost\Pegas-CMS\system\classes\Kohana\View.php:137
2012-12-01 14:55:46 --- DEBUG: #0 P:\home\localhost\Pegas-CMS\system\classes\Kohana\View.php(137): Kohana_View->set_filename('/pages/main')
#1 P:\home\localhost\Pegas-CMS\system\classes\Kohana\View.php(30): Kohana_View->__construct('/pages/main', NULL)
#2 P:\home\localhost\Pegas-CMS\application\classes\Controller\Main.php(7): Kohana_View::factory('/pages/main')
#3 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 P:\home\localhost\Pegas-CMS\index.php(118): Kohana_Request->execute()
#9 {main} in P:\home\localhost\Pegas-CMS\system\classes\Kohana\View.php:137
2012-12-01 14:55:46 --- CRITICAL: View_Exception [ 0 ]: The requested view /pages/main could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in P:\home\localhost\Pegas-CMS\system\classes\Kohana\View.php:137
2012-12-01 14:55:46 --- DEBUG: #0 P:\home\localhost\Pegas-CMS\system\classes\Kohana\View.php(137): Kohana_View->set_filename('/pages/main')
#1 P:\home\localhost\Pegas-CMS\system\classes\Kohana\View.php(30): Kohana_View->__construct('/pages/main', NULL)
#2 P:\home\localhost\Pegas-CMS\application\classes\Controller\Main.php(7): Kohana_View::factory('/pages/main')
#3 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 P:\home\localhost\Pegas-CMS\index.php(118): Kohana_Request->execute()
#9 {main} in P:\home\localhost\Pegas-CMS\system\classes\Kohana\View.php:137
2012-12-01 14:55:46 --- CRITICAL: View_Exception [ 0 ]: The requested view /pages/main could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in P:\home\localhost\Pegas-CMS\system\classes\Kohana\View.php:137
2012-12-01 14:55:46 --- DEBUG: #0 P:\home\localhost\Pegas-CMS\system\classes\Kohana\View.php(137): Kohana_View->set_filename('/pages/main')
#1 P:\home\localhost\Pegas-CMS\system\classes\Kohana\View.php(30): Kohana_View->__construct('/pages/main', NULL)
#2 P:\home\localhost\Pegas-CMS\application\classes\Controller\Main.php(7): Kohana_View::factory('/pages/main')
#3 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 P:\home\localhost\Pegas-CMS\index.php(118): Kohana_Request->execute()
#9 {main} in P:\home\localhost\Pegas-CMS\system\classes\Kohana\View.php:137
2012-12-01 14:55:47 --- CRITICAL: View_Exception [ 0 ]: The requested view /pages/main could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in P:\home\localhost\Pegas-CMS\system\classes\Kohana\View.php:137
2012-12-01 14:55:47 --- DEBUG: #0 P:\home\localhost\Pegas-CMS\system\classes\Kohana\View.php(137): Kohana_View->set_filename('/pages/main')
#1 P:\home\localhost\Pegas-CMS\system\classes\Kohana\View.php(30): Kohana_View->__construct('/pages/main', NULL)
#2 P:\home\localhost\Pegas-CMS\application\classes\Controller\Main.php(7): Kohana_View::factory('/pages/main')
#3 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 P:\home\localhost\Pegas-CMS\index.php(118): Kohana_Request->execute()
#9 {main} in P:\home\localhost\Pegas-CMS\system\classes\Kohana\View.php:137
2012-12-01 14:55:47 --- CRITICAL: View_Exception [ 0 ]: The requested view /pages/main could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in P:\home\localhost\Pegas-CMS\system\classes\Kohana\View.php:137
2012-12-01 14:55:47 --- DEBUG: #0 P:\home\localhost\Pegas-CMS\system\classes\Kohana\View.php(137): Kohana_View->set_filename('/pages/main')
#1 P:\home\localhost\Pegas-CMS\system\classes\Kohana\View.php(30): Kohana_View->__construct('/pages/main', NULL)
#2 P:\home\localhost\Pegas-CMS\application\classes\Controller\Main.php(7): Kohana_View::factory('/pages/main')
#3 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 P:\home\localhost\Pegas-CMS\index.php(118): Kohana_Request->execute()
#9 {main} in P:\home\localhost\Pegas-CMS\system\classes\Kohana\View.php:137
2012-12-01 14:55:47 --- CRITICAL: View_Exception [ 0 ]: The requested view /pages/main could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in P:\home\localhost\Pegas-CMS\system\classes\Kohana\View.php:137
2012-12-01 14:55:47 --- DEBUG: #0 P:\home\localhost\Pegas-CMS\system\classes\Kohana\View.php(137): Kohana_View->set_filename('/pages/main')
#1 P:\home\localhost\Pegas-CMS\system\classes\Kohana\View.php(30): Kohana_View->__construct('/pages/main', NULL)
#2 P:\home\localhost\Pegas-CMS\application\classes\Controller\Main.php(7): Kohana_View::factory('/pages/main')
#3 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 P:\home\localhost\Pegas-CMS\index.php(118): Kohana_Request->execute()
#9 {main} in P:\home\localhost\Pegas-CMS\system\classes\Kohana\View.php:137
2012-12-01 14:55:47 --- CRITICAL: View_Exception [ 0 ]: The requested view /pages/main could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in P:\home\localhost\Pegas-CMS\system\classes\Kohana\View.php:137
2012-12-01 14:55:47 --- DEBUG: #0 P:\home\localhost\Pegas-CMS\system\classes\Kohana\View.php(137): Kohana_View->set_filename('/pages/main')
#1 P:\home\localhost\Pegas-CMS\system\classes\Kohana\View.php(30): Kohana_View->__construct('/pages/main', NULL)
#2 P:\home\localhost\Pegas-CMS\application\classes\Controller\Main.php(7): Kohana_View::factory('/pages/main')
#3 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 P:\home\localhost\Pegas-CMS\index.php(118): Kohana_Request->execute()
#9 {main} in P:\home\localhost\Pegas-CMS\system\classes\Kohana\View.php:137
2012-12-01 14:55:47 --- CRITICAL: View_Exception [ 0 ]: The requested view /pages/main could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in P:\home\localhost\Pegas-CMS\system\classes\Kohana\View.php:137
2012-12-01 14:55:47 --- DEBUG: #0 P:\home\localhost\Pegas-CMS\system\classes\Kohana\View.php(137): Kohana_View->set_filename('/pages/main')
#1 P:\home\localhost\Pegas-CMS\system\classes\Kohana\View.php(30): Kohana_View->__construct('/pages/main', NULL)
#2 P:\home\localhost\Pegas-CMS\application\classes\Controller\Main.php(7): Kohana_View::factory('/pages/main')
#3 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 P:\home\localhost\Pegas-CMS\index.php(118): Kohana_Request->execute()
#9 {main} in P:\home\localhost\Pegas-CMS\system\classes\Kohana\View.php:137
2012-12-01 14:55:48 --- CRITICAL: View_Exception [ 0 ]: The requested view /pages/main could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in P:\home\localhost\Pegas-CMS\system\classes\Kohana\View.php:137
2012-12-01 14:55:48 --- DEBUG: #0 P:\home\localhost\Pegas-CMS\system\classes\Kohana\View.php(137): Kohana_View->set_filename('/pages/main')
#1 P:\home\localhost\Pegas-CMS\system\classes\Kohana\View.php(30): Kohana_View->__construct('/pages/main', NULL)
#2 P:\home\localhost\Pegas-CMS\application\classes\Controller\Main.php(7): Kohana_View::factory('/pages/main')
#3 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 P:\home\localhost\Pegas-CMS\index.php(118): Kohana_Request->execute()
#9 {main} in P:\home\localhost\Pegas-CMS\system\classes\Kohana\View.php:137
2012-12-01 14:55:48 --- CRITICAL: View_Exception [ 0 ]: The requested view /pages/main could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in P:\home\localhost\Pegas-CMS\system\classes\Kohana\View.php:137
2012-12-01 14:55:48 --- DEBUG: #0 P:\home\localhost\Pegas-CMS\system\classes\Kohana\View.php(137): Kohana_View->set_filename('/pages/main')
#1 P:\home\localhost\Pegas-CMS\system\classes\Kohana\View.php(30): Kohana_View->__construct('/pages/main', NULL)
#2 P:\home\localhost\Pegas-CMS\application\classes\Controller\Main.php(7): Kohana_View::factory('/pages/main')
#3 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 P:\home\localhost\Pegas-CMS\index.php(118): Kohana_Request->execute()
#9 {main} in P:\home\localhost\Pegas-CMS\system\classes\Kohana\View.php:137
2012-12-01 14:55:48 --- CRITICAL: View_Exception [ 0 ]: The requested view /pages/main could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in P:\home\localhost\Pegas-CMS\system\classes\Kohana\View.php:137
2012-12-01 14:55:48 --- DEBUG: #0 P:\home\localhost\Pegas-CMS\system\classes\Kohana\View.php(137): Kohana_View->set_filename('/pages/main')
#1 P:\home\localhost\Pegas-CMS\system\classes\Kohana\View.php(30): Kohana_View->__construct('/pages/main', NULL)
#2 P:\home\localhost\Pegas-CMS\application\classes\Controller\Main.php(7): Kohana_View::factory('/pages/main')
#3 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 P:\home\localhost\Pegas-CMS\index.php(118): Kohana_Request->execute()
#9 {main} in P:\home\localhost\Pegas-CMS\system\classes\Kohana\View.php:137
2012-12-01 14:56:04 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Page.php [ 25 ] in P:\home\localhost\Pegas-CMS\application\classes\Controller\Page.php:25
2012-12-01 14:56:04 --- DEBUG: #0 P:\home\localhost\Pegas-CMS\application\classes\Controller\Page.php(25): Kohana_Core::error_handler(2, 'Attempt to assi...', 'P:\home\localho...', 25, Array)
#1 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Controller.php(69): Controller_Page->before()
#2 [internal function]: Kohana_Controller->execute()
#3 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 P:\home\localhost\Pegas-CMS\index.php(118): Kohana_Request->execute()
#7 {main} in P:\home\localhost\Pegas-CMS\application\classes\Controller\Page.php:25
2012-12-01 14:57:37 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Page.php [ 25 ] in P:\home\localhost\Pegas-CMS\application\classes\Controller\Page.php:25
2012-12-01 14:57:37 --- DEBUG: #0 P:\home\localhost\Pegas-CMS\application\classes\Controller\Page.php(25): Kohana_Core::error_handler(2, 'Attempt to assi...', 'P:\home\localho...', 25, Array)
#1 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Controller.php(69): Controller_Page->before()
#2 [internal function]: Kohana_Controller->execute()
#3 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 P:\home\localhost\Pegas-CMS\index.php(118): Kohana_Request->execute()
#7 {main} in P:\home\localhost\Pegas-CMS\application\classes\Controller\Page.php:25
2012-12-01 14:57:38 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Page.php [ 25 ] in P:\home\localhost\Pegas-CMS\application\classes\Controller\Page.php:25
2012-12-01 14:57:38 --- DEBUG: #0 P:\home\localhost\Pegas-CMS\application\classes\Controller\Page.php(25): Kohana_Core::error_handler(2, 'Attempt to assi...', 'P:\home\localho...', 25, Array)
#1 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Controller.php(69): Controller_Page->before()
#2 [internal function]: Kohana_Controller->execute()
#3 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 P:\home\localhost\Pegas-CMS\index.php(118): Kohana_Request->execute()
#7 {main} in P:\home\localhost\Pegas-CMS\application\classes\Controller\Page.php:25
2012-12-01 14:58:14 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Page.php [ 24 ] in P:\home\localhost\Pegas-CMS\application\classes\Controller\Page.php:24
2012-12-01 14:58:14 --- DEBUG: #0 P:\home\localhost\Pegas-CMS\application\classes\Controller\Page.php(24): Kohana_Core::error_handler(2, 'Attempt to assi...', 'P:\home\localho...', 24, Array)
#1 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Controller.php(69): Controller_Page->before()
#2 [internal function]: Kohana_Controller->execute()
#3 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 P:\home\localhost\Pegas-CMS\index.php(118): Kohana_Request->execute()
#7 {main} in P:\home\localhost\Pegas-CMS\application\classes\Controller\Page.php:24
2012-12-01 14:58:15 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Page.php [ 24 ] in P:\home\localhost\Pegas-CMS\application\classes\Controller\Page.php:24
2012-12-01 14:58:15 --- DEBUG: #0 P:\home\localhost\Pegas-CMS\application\classes\Controller\Page.php(24): Kohana_Core::error_handler(2, 'Attempt to assi...', 'P:\home\localho...', 24, Array)
#1 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Controller.php(69): Controller_Page->before()
#2 [internal function]: Kohana_Controller->execute()
#3 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 P:\home\localhost\Pegas-CMS\index.php(118): Kohana_Request->execute()
#7 {main} in P:\home\localhost\Pegas-CMS\application\classes\Controller\Page.php:24
2012-12-01 14:58:15 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Page.php [ 24 ] in P:\home\localhost\Pegas-CMS\application\classes\Controller\Page.php:24
2012-12-01 14:58:15 --- DEBUG: #0 P:\home\localhost\Pegas-CMS\application\classes\Controller\Page.php(24): Kohana_Core::error_handler(2, 'Attempt to assi...', 'P:\home\localho...', 24, Array)
#1 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Controller.php(69): Controller_Page->before()
#2 [internal function]: Kohana_Controller->execute()
#3 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 P:\home\localhost\Pegas-CMS\index.php(118): Kohana_Request->execute()
#7 {main} in P:\home\localhost\Pegas-CMS\application\classes\Controller\Page.php:24
2012-12-01 14:58:15 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Page.php [ 24 ] in P:\home\localhost\Pegas-CMS\application\classes\Controller\Page.php:24
2012-12-01 14:58:15 --- DEBUG: #0 P:\home\localhost\Pegas-CMS\application\classes\Controller\Page.php(24): Kohana_Core::error_handler(2, 'Attempt to assi...', 'P:\home\localho...', 24, Array)
#1 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Controller.php(69): Controller_Page->before()
#2 [internal function]: Kohana_Controller->execute()
#3 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 P:\home\localhost\Pegas-CMS\index.php(118): Kohana_Request->execute()
#7 {main} in P:\home\localhost\Pegas-CMS\application\classes\Controller\Page.php:24
2012-12-01 14:58:15 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Page.php [ 24 ] in P:\home\localhost\Pegas-CMS\application\classes\Controller\Page.php:24
2012-12-01 14:58:15 --- DEBUG: #0 P:\home\localhost\Pegas-CMS\application\classes\Controller\Page.php(24): Kohana_Core::error_handler(2, 'Attempt to assi...', 'P:\home\localho...', 24, Array)
#1 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Controller.php(69): Controller_Page->before()
#2 [internal function]: Kohana_Controller->execute()
#3 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 P:\home\localhost\Pegas-CMS\index.php(118): Kohana_Request->execute()
#7 {main} in P:\home\localhost\Pegas-CMS\application\classes\Controller\Page.php:24
2012-12-01 14:58:15 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Page.php [ 24 ] in P:\home\localhost\Pegas-CMS\application\classes\Controller\Page.php:24
2012-12-01 14:58:15 --- DEBUG: #0 P:\home\localhost\Pegas-CMS\application\classes\Controller\Page.php(24): Kohana_Core::error_handler(2, 'Attempt to assi...', 'P:\home\localho...', 24, Array)
#1 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Controller.php(69): Controller_Page->before()
#2 [internal function]: Kohana_Controller->execute()
#3 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 P:\home\localhost\Pegas-CMS\index.php(118): Kohana_Request->execute()
#7 {main} in P:\home\localhost\Pegas-CMS\application\classes\Controller\Page.php:24
2012-12-01 14:58:16 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Page.php [ 24 ] in P:\home\localhost\Pegas-CMS\application\classes\Controller\Page.php:24
2012-12-01 14:58:16 --- DEBUG: #0 P:\home\localhost\Pegas-CMS\application\classes\Controller\Page.php(24): Kohana_Core::error_handler(2, 'Attempt to assi...', 'P:\home\localho...', 24, Array)
#1 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Controller.php(69): Controller_Page->before()
#2 [internal function]: Kohana_Controller->execute()
#3 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 P:\home\localhost\Pegas-CMS\index.php(118): Kohana_Request->execute()
#7 {main} in P:\home\localhost\Pegas-CMS\application\classes\Controller\Page.php:24
2012-12-01 14:58:16 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Page.php [ 24 ] in P:\home\localhost\Pegas-CMS\application\classes\Controller\Page.php:24
2012-12-01 14:58:16 --- DEBUG: #0 P:\home\localhost\Pegas-CMS\application\classes\Controller\Page.php(24): Kohana_Core::error_handler(2, 'Attempt to assi...', 'P:\home\localho...', 24, Array)
#1 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Controller.php(69): Controller_Page->before()
#2 [internal function]: Kohana_Controller->execute()
#3 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 P:\home\localhost\Pegas-CMS\index.php(118): Kohana_Request->execute()
#7 {main} in P:\home\localhost\Pegas-CMS\application\classes\Controller\Page.php:24
2012-12-01 14:58:31 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Main.php [ 7 ] in P:\home\localhost\Pegas-CMS\application\classes\Controller\Main.php:7
2012-12-01 14:58:31 --- DEBUG: #0 P:\home\localhost\Pegas-CMS\application\classes\Controller\Main.php(7): Kohana_Core::error_handler(2, 'Attempt to assi...', 'P:\home\localho...', 7, Array)
#1 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 P:\home\localhost\Pegas-CMS\index.php(118): Kohana_Request->execute()
#7 {main} in P:\home\localhost\Pegas-CMS\application\classes\Controller\Main.php:7
2012-12-01 14:58:32 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Main.php [ 7 ] in P:\home\localhost\Pegas-CMS\application\classes\Controller\Main.php:7
2012-12-01 14:58:32 --- DEBUG: #0 P:\home\localhost\Pegas-CMS\application\classes\Controller\Main.php(7): Kohana_Core::error_handler(2, 'Attempt to assi...', 'P:\home\localho...', 7, Array)
#1 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 P:\home\localhost\Pegas-CMS\index.php(118): Kohana_Request->execute()
#7 {main} in P:\home\localhost\Pegas-CMS\application\classes\Controller\Main.php:7
2012-12-01 14:58:52 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Main::$main_config ~ APPPATH\classes\Controller\Page.php [ 54 ] in P:\home\localhost\Pegas-CMS\application\classes\Controller\Page.php:54
2012-12-01 14:58:52 --- DEBUG: #0 P:\home\localhost\Pegas-CMS\application\classes\Controller\Page.php(54): Kohana_Core::error_handler(8, 'Undefined prope...', 'P:\home\localho...', 54, Array)
#1 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Controller.php(87): Controller_Page->after()
#2 [internal function]: Kohana_Controller->execute()
#3 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 P:\home\localhost\Pegas-CMS\index.php(118): Kohana_Request->execute()
#7 {main} in P:\home\localhost\Pegas-CMS\application\classes\Controller\Page.php:54
2012-12-01 15:00:25 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: styles ~ DOCROOT\themes\default\views\default.php [ 9 ] in P:\home\localhost\Pegas-CMS\themes\default\views\default.php:9
2012-12-01 15:00:25 --- DEBUG: #0 P:\home\localhost\Pegas-CMS\themes\default\views\default.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'P:\home\localho...', 9, Array)
#1 P:\home\localhost\Pegas-CMS\system\classes\Kohana\View.php(61): include('P:\home\localho...')
#2 P:\home\localhost\Pegas-CMS\system\classes\Kohana\View.php(348): Kohana_View::capture('themes/default/...', Array)
#3 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 P:\home\localhost\Pegas-CMS\application\classes\Controller\Page.php(64): Kohana_Controller_Template->after()
#5 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Controller.php(87): Controller_Page->after()
#6 [internal function]: Kohana_Controller->execute()
#7 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#8 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 P:\home\localhost\Pegas-CMS\index.php(118): Kohana_Request->execute()
#11 {main} in P:\home\localhost\Pegas-CMS\themes\default\views\default.php:9
2012-12-01 15:01:19 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: fullcontent ~ DOCROOT\themes\default\views\default.php [ 22 ] in P:\home\localhost\Pegas-CMS\themes\default\views\default.php:22
2012-12-01 15:01:19 --- DEBUG: #0 P:\home\localhost\Pegas-CMS\themes\default\views\default.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', 'P:\home\localho...', 22, Array)
#1 P:\home\localhost\Pegas-CMS\system\classes\Kohana\View.php(61): include('P:\home\localho...')
#2 P:\home\localhost\Pegas-CMS\system\classes\Kohana\View.php(348): Kohana_View::capture('themes/default/...', Array)
#3 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 P:\home\localhost\Pegas-CMS\application\classes\Controller\Page.php(64): Kohana_Controller_Template->after()
#5 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Controller.php(87): Controller_Page->after()
#6 [internal function]: Kohana_Controller->execute()
#7 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#8 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 P:\home\localhost\Pegas-CMS\index.php(118): Kohana_Request->execute()
#11 {main} in P:\home\localhost\Pegas-CMS\themes\default\views\default.php:22
2012-12-01 15:22:56 --- CRITICAL: ErrorException [ 1 ]: Class 'Captcha' not found ~ DOCROOT\themes\default\views\auth\registration.php [ 12 ] in :
2012-12-01 15:22:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-01 15:25:47 --- CRITICAL: ReflectionException [ 0 ]: Method Model_User::captcha_valid() does not exist ~ SYSPATH\classes\Kohana\Validation.php [ 407 ] in P:\home\localhost\Pegas-CMS\system\classes\Kohana\Validation.php:407
2012-12-01 15:25:47 --- DEBUG: #0 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Validation.php(407): ReflectionMethod->__construct('Model_User', 'captcha_valid')
#1 P:\home\localhost\Pegas-CMS\modules\orm\classes\Kohana\ORM.php(1263): Kohana_Validation->check()
#2 P:\home\localhost\Pegas-CMS\modules\orm\classes\Kohana\ORM.php(1299): Kohana_ORM->check(Object(Validation))
#3 P:\home\localhost\Pegas-CMS\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(Object(Validation))
#4 P:\home\localhost\Pegas-CMS\application\classes\Controller\Auth.php(57): Kohana_ORM->save(Object(Validation))
#5 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Controller.php(84): Controller_Auth->action_registration()
#6 [internal function]: Kohana_Controller->execute()
#7 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#8 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 P:\home\localhost\Pegas-CMS\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 P:\home\localhost\Pegas-CMS\index.php(118): Kohana_Request->execute()
#11 {main} in P:\home\localhost\Pegas-CMS\system\classes\Kohana\Validation.php:407
2012-12-01 15:26:24 --- CRITICAL: ErrorException [ 1 ]: Class 'page' not found ~ APPPATH\classes\Controller\Auth.php [ 68 ] in :
2012-12-01 15:26:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-01 15:29:04 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\Auth.php [ 19 ] in :
2012-12-01 15:29:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-01 15:29:27 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\Auth.php [ 13 ] in :
2012-12-01 15:29:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :