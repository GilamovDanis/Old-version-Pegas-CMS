<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-10-06 14:25:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:25:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:25:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:25:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:25:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:25:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:25:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:25:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:25:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:25:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:25:51 --- ERROR: View_Exception [ 0 ]: The requested view guestbook/sidebar1 could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-10-06 14:25:51 --- STRACE: View_Exception [ 0 ]: The requested view guestbook/sidebar1 could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 P:\home\localhost\Pegas-CMS\system\classes\kohana\view.php(137): Kohana_View->set_filename('guestbook/sideb...')
#1 P:\home\localhost\Pegas-CMS\system\classes\kohana\view.php(30): Kohana_View->__construct('guestbook/sideb...', NULL)
#2 P:\home\localhost\Pegas-CMS\modules\guestbook\classes\controller\guestbook.php(17): Kohana_View::factory('guestbook/sideb...')
#3 [internal function]: Controller_Guestbook->action_index()
#4 P:\home\localhost\Pegas-CMS\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Guestbook))
#5 P:\home\localhost\Pegas-CMS\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 P:\home\localhost\Pegas-CMS\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-06 14:26:30 --- ERROR: ErrorException [ 1 ]: Call to undefined method Date::timef() ~ DOCROOT\themes\default\views\guestbook\main.php [ 19 ]
2012-10-06 14:26:30 --- STRACE: ErrorException [ 1 ]: Call to undefined method Date::timef() ~ DOCROOT\themes\default\views\guestbook\main.php [ 19 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-06 14:26:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:26:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:26:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:26:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:26:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:26:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:26:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:26:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:27:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/icons/refresh.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:27:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:27:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/icons/refresh.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:27:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:27:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:27:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:27:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:27:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:27:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:27:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:27:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:27:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:27:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:27:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:27:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:27:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:27:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:27:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:29:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:29:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:29:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:29:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:29:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:29:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:29:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:29:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:29:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:29:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:29:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:29:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:29:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:29:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:29:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:29:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:29:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:29:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:30:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:30:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:30:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:30:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:30:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:30:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:30:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:30:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:30:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:30:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:30:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:30:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:30:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:30:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:30:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:30:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:30:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:30:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:30:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:30:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:30:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:30:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:30:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:30:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:30:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:30:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:30:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:30:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:31:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:31:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:31:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:31:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:31:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:31:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:31:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:31:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:31:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:31:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:31:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:31:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:31:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:31:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:31:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:31:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:31:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:31:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:31:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:31:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:31:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:31:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:31:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:31:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:31:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:31:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:31:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:31:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:32:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:32:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:32:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:32:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:32:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:32:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:32:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:32:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:32:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:32:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:32:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:32:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:32:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:32:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:32:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:32:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:32:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:32:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:32:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:33:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:33:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:33:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:33:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:33:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:33:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:33:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:33:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:33:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL guestbooksad was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-06 14:33:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL guestbooksad was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 P:\home\localhost\Pegas-CMS\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 P:\home\localhost\Pegas-CMS\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-06 14:33:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:33:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:33:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:33:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:33:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:33:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:33:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:33:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:33:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:33:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:33:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:33:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:34:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:34:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:34:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:34:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:34:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:34:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:34:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:34:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:34:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:34:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:34:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:34:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:34:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:34:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:34:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:34:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:35:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:35:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:35:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:35:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:36:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:36:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:36:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:36:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:36:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:36:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:36:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:36:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:36:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:36:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:36:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:36:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:43:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:43:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:43:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:43:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:43:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:43:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:43:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:43:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:44:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:44:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:44:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:44:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:44:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:44:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:44:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:44:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:44:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:44:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:44:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:44:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:44:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:44:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:44:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:44:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:44:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:44:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:44:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:44:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:44:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:44:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:44:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:44:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:44:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:44:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:44:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:44:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:44:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:44:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:44:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:44:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:44:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:44:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:44:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:45:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:45:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:45:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:45:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:45:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:45:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:46:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:46:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:46:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:46:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:46:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:46:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:46:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:46:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:46:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:46:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:46:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:46:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:46:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:46:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:46:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:46:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:46:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:46:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:47:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:47:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:47:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:47:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:47:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:47:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:49:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:49:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:49:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:49:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:49:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:49:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:49:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:49:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:49:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:49:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:49:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:49:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:49:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:49:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:49:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:49:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:49:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:49:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:49:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:49:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:49:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:49:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:49:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:49:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:49:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:49:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:49:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:49:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:49:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:49:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:50:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:50:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:50:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:50:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:50:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:50:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:50:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:50:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:50:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:50:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:50:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:50:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:50:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:50:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:50:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:50:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:50:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:50:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:50:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:50:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:50:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:50:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:50:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:50:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:55:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:55:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:55:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:55:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:55:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:55:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:55:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:55:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:55:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:55:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:55:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:55:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:55:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:55:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:55:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:55:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:55:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:55:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:56:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:56:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:56:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:56:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:56:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:56:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:56:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:56:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:56:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:56:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:56:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:56:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:56:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:56:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:56:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:56:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:56:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:56:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:57:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:57:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:57:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:57:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:57:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:57:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:57:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:57:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:57:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:57:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:57:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:57:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:57:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:57:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:57:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:57:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:57:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:57:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:57:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:57:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:57:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:57:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:57:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:57:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:57:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:57:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:57:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:57:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:57:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:57:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:57:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:57:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:57:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:57:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:57:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:57:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:58:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:58:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:58:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:58:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:58:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:58:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:58:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:58:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:58:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:58:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:58:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:58:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:58:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:58:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:58:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:58:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:58:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:58:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:58:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:58:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:58:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:58:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:58:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:58:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:58:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:58:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:58:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:58:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:58:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:58:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:58:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:58:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:58:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:58:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:58:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:58:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:58:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:58:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:58:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:58:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:58:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:58:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:59:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:59:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:59:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:59:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:59:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:59:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:59:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:59:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:59:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:59:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:59:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:59:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:59:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:59:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:59:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:59:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:59:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:59:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:59:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:59:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:59:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:59:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:59:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:59:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:59:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:59:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:59:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:59:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:59:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:59:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:59:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:59:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:59:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:59:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:59:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:59:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:59:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:59:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:59:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:59:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 14:59:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 14:59:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:00:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:00:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:00:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:00:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:00:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:00:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:00:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:00:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:00:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:00:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:00:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:00:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:00:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:00:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:00:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:00:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:00:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:00:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:02:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:02:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:02:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:02:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:02:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:02:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:02:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:02:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:02:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:02:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:02:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:02:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:02:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:02:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:02:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:02:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:02:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:02:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:02:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:02:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:02:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:02:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:02:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:02:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:03:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:03:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:03:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:03:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:03:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:03:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:03:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:03:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:03:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:03:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:03:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:03:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:03:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:03:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:03:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:03:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:03:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:03:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:03:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:03:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:03:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:03:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:03:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:03:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:03:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:03:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:03:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:03:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:03:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:03:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:04:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:04:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:04:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:04:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:04:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:04:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:04:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:04:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:04:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:04:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:04:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:04:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:04:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:04:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:04:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:04:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:04:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:04:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:04:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:04:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:04:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:04:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:04:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:04:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:04:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:04:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:04:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:04:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:04:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:04:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:04:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:04:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:04:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:04:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:04:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:04:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:04:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:04:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:04:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:04:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:04:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:04:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:05:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:05:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:05:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:05:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:05:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:05:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:05:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:05:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:05:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:05:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:05:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:05:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:05:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:05:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:05:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:05:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:05:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:05:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:05:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:05:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:05:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:05:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:05:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:05:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:05:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:05:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:05:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:05:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:05:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:05:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:05:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:05:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:05:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:05:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:05:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:05:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:06:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:06:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:06:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:06:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:06:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:06:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:06:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:06:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:06:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:06:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:06:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:06:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:06:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:06:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:06:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:06:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:06:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:06:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:06:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:06:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:06:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:06:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:06:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:06:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:06:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:06:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:06:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:06:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:06:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:06:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:06:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:06:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:06:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:06:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:06:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:06:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:06:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:06:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:06:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:06:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:06:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:06:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:07:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:07:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:07:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:07:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:07:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:07:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:08:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:08:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:08:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:08:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:08:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:08:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:08:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:08:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:08:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:08:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:08:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:08:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:08:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:08:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:08:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:08:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:08:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:08:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:08:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:08:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:08:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:08:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:08:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:08:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:08:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:08:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:08:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:08:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:08:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:08:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:08:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:08:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:08:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:08:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:08:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:08:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:08:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:08:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:08:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:08:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:09:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:09:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:09:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:09:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:09:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:09:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:11:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:11:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:11:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:11:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:11:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:11:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:11:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:11:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:11:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:11:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:11:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:11:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:12:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:12:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:12:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:12:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:12:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:12:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:12:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:12:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:12:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:12:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:12:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:12:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:12:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:12:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:12:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:12:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:12:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:12:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:12:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:12:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:12:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:12:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:13:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:13:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:13:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:13:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:13:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:13:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:13:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:13:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:13:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:13:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:13:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:13:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:21:39 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end ~ DOCROOT\themes\default\views\default.php [ 103 ]
2012-10-06 15:21:39 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end ~ DOCROOT\themes\default\views\default.php [ 103 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-06 15:21:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:21:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:22:25 --- ERROR: ErrorException [ 8 ]: Undefined variable: fullcontent ~ DOCROOT\themes\default\views\default.php [ 35 ]
2012-10-06 15:22:25 --- STRACE: ErrorException [ 8 ]: Undefined variable: fullcontent ~ DOCROOT\themes\default\views\default.php [ 35 ]
--
#0 P:\home\localhost\Pegas-CMS\themes\default\views\default.php(35): Kohana_Core::error_handler(8, 'Undefined varia...', 'P:\home\localho...', 35, Array)
#1 P:\home\localhost\Pegas-CMS\system\classes\kohana\view.php(61): include('P:\home\localho...')
#2 P:\home\localhost\Pegas-CMS\system\classes\kohana\view.php(343): Kohana_View::capture('themes/default/...', Array)
#3 P:\home\localhost\Pegas-CMS\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 P:\home\localhost\Pegas-CMS\application\classes\page.php(74): Kohana_Controller_Template->after()
#5 [internal function]: Page->after()
#6 P:\home\localhost\Pegas-CMS\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Main))
#7 P:\home\localhost\Pegas-CMS\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 P:\home\localhost\Pegas-CMS\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#10 {main}
2012-10-06 15:22:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:22:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:24:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:24:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:24:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:24:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:24:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:24:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:24:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:24:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:24:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:24:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:24:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:24:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:27:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:27:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:27:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:27:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:27:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:27:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:27:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:27:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:27:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:27:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:27:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:27:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:28:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:28:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:28:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:28:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:28:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:28:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:28:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:28:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:28:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:28:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:28:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:28:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:28:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:28:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:28:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:28:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:28:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:28:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:28:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:28:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:28:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:28:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:28:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:28:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:28:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:28:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:28:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:28:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:28:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:28:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:28:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:28:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:28:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:28:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:28:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:28:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:28:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:28:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:28:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:28:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:29:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:29:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:29:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:29:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:29:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:29:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:29:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:29:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:31:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:31:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:31:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:31:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:32:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:32:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:32:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:32:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:32:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:32:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:32:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:32:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:32:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:32:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:32:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:32:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:33:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:33:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:33:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:33:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:33:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:33:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:34:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:34:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:34:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:34:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:34:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:34:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:35:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:35:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:35:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:35:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:35:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:35:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:35:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:35:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:37:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:37:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:37:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:37:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:37:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:37:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:37:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:37:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:37:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:37:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:38:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:38:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:38:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:38:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:38:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:38:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:39:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:39:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:39:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:39:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:39:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:39:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:43:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:43:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:43:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:43:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:43:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:43:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:44:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:44:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:44:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:44:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:44:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:44:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:44:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:44:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:44:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:44:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:44:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:44:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:44:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:44:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:44:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:44:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:44:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:44:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:44:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:44:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:44:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:44:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:44:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:44:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:45:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:45:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:45:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:45:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:45:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:45:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:45:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:45:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:45:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:45:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:45:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:45:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:45:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:45:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:45:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:45:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:45:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:45:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:46:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:46:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:46:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:46:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:46:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:46:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:46:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:46:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:46:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:46:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-06 15:46:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-06 15:46:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\Pegas-CMS\index.php(109): Kohana_Request->execute()
#1 {main}