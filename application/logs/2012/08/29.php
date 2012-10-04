<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-08-29 16:03:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-29 16:03:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\pegas\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-29 16:03:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-29 16:03:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-29 16:03:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\pegas\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-29 16:03:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\pegas\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-29 16:03:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-29 16:03:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-29 16:03:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\pegas\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-29 16:03:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\pegas\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-29 16:03:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-29 16:03:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\pegas\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-29 16:03:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-29 16:03:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\pegas\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-29 16:03:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-29 16:03:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\pegas\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-29 16:03:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-29 16:03:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\pegas\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-29 16:06:52 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\kohana\session.php [ 326 ]
2012-08-29 16:06:52 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\kohana\session.php [ 326 ]
--
#0 P:\home\localhost\pegas\system\classes\kohana\session.php(125): Kohana_Session->read(NULL)
#1 P:\home\localhost\pegas\system\classes\kohana\session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 P:\home\localhost\pegas\application\classes\page.php(20): Kohana_Session::instance()
#3 [internal function]: Page->before()
#4 P:\home\localhost\pegas\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Main))
#5 P:\home\localhost\pegas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 P:\home\localhost\pegas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 P:\home\localhost\pegas\index.php(109): Kohana_Request->execute()
#8 {main}
2012-08-29 16:06:56 --- ERROR: Kohana_Exception [ 0 ]: Database method list_columns is not supported by Kohana_Database_PDO ~ MODPATH\database\classes\kohana\database\pdo.php [ 241 ]
2012-08-29 16:06:56 --- STRACE: Kohana_Exception [ 0 ]: Database method list_columns is not supported by Kohana_Database_PDO ~ MODPATH\database\classes\kohana\database\pdo.php [ 241 ]
--
#0 P:\home\localhost\pegas\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_PDO->list_columns('user_tokens')
#1 P:\home\localhost\pegas\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#2 P:\home\localhost\pegas\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#3 P:\home\localhost\pegas\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#4 P:\home\localhost\pegas\modules\orm\classes\model\auth\user\token.php(22): Kohana_ORM->__construct(Array)
#5 P:\home\localhost\pegas\modules\orm\classes\kohana\orm.php(37): Model_Auth_User_Token->__construct(Array)
#6 P:\home\localhost\pegas\modules\orm\classes\kohana\auth\orm.php(154): Kohana_ORM::factory('user_token', Array)
#7 P:\home\localhost\pegas\modules\orm\classes\kohana\auth\orm.php(194): Kohana_Auth_ORM->auto_login()
#8 P:\home\localhost\pegas\application\classes\page.php(22): Kohana_Auth_ORM->get_user()
#9 [internal function]: Page->before()
#10 P:\home\localhost\pegas\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Main))
#11 P:\home\localhost\pegas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 P:\home\localhost\pegas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 P:\home\localhost\pegas\index.php(109): Kohana_Request->execute()
#14 {main}
2012-08-29 16:06:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-29 16:06:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\pegas\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-29 16:06:57 --- ERROR: Kohana_Exception [ 0 ]: Database method list_columns is not supported by Kohana_Database_PDO ~ MODPATH\database\classes\kohana\database\pdo.php [ 241 ]
2012-08-29 16:06:57 --- STRACE: Kohana_Exception [ 0 ]: Database method list_columns is not supported by Kohana_Database_PDO ~ MODPATH\database\classes\kohana\database\pdo.php [ 241 ]
--
#0 P:\home\localhost\pegas\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_PDO->list_columns('user_tokens')
#1 P:\home\localhost\pegas\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#2 P:\home\localhost\pegas\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#3 P:\home\localhost\pegas\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#4 P:\home\localhost\pegas\modules\orm\classes\model\auth\user\token.php(22): Kohana_ORM->__construct(Array)
#5 P:\home\localhost\pegas\modules\orm\classes\kohana\orm.php(37): Model_Auth_User_Token->__construct(Array)
#6 P:\home\localhost\pegas\modules\orm\classes\kohana\auth\orm.php(154): Kohana_ORM::factory('user_token', Array)
#7 P:\home\localhost\pegas\modules\orm\classes\kohana\auth\orm.php(194): Kohana_Auth_ORM->auto_login()
#8 P:\home\localhost\pegas\application\classes\page.php(22): Kohana_Auth_ORM->get_user()
#9 [internal function]: Page->before()
#10 P:\home\localhost\pegas\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Main))
#11 P:\home\localhost\pegas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 P:\home\localhost\pegas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 P:\home\localhost\pegas\index.php(109): Kohana_Request->execute()
#14 {main}
2012-08-29 16:06:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-29 16:06:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\pegas\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-29 16:08:51 --- ERROR: Kohana_Exception [ 0 ]: Database method list_columns is not supported by Kohana_Database_PDO ~ MODPATH\database\classes\kohana\database\pdo.php [ 241 ]
2012-08-29 16:08:51 --- STRACE: Kohana_Exception [ 0 ]: Database method list_columns is not supported by Kohana_Database_PDO ~ MODPATH\database\classes\kohana\database\pdo.php [ 241 ]
--
#0 P:\home\localhost\pegas\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_PDO->list_columns('user_tokens')
#1 P:\home\localhost\pegas\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#2 P:\home\localhost\pegas\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#3 P:\home\localhost\pegas\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#4 P:\home\localhost\pegas\modules\orm\classes\model\auth\user\token.php(22): Kohana_ORM->__construct(Array)
#5 P:\home\localhost\pegas\modules\orm\classes\kohana\orm.php(37): Model_Auth_User_Token->__construct(Array)
#6 P:\home\localhost\pegas\modules\orm\classes\kohana\auth\orm.php(154): Kohana_ORM::factory('user_token', Array)
#7 P:\home\localhost\pegas\modules\orm\classes\kohana\auth\orm.php(194): Kohana_Auth_ORM->auto_login()
#8 P:\home\localhost\pegas\application\classes\page.php(22): Kohana_Auth_ORM->get_user()
#9 [internal function]: Page->before()
#10 P:\home\localhost\pegas\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Main))
#11 P:\home\localhost\pegas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 P:\home\localhost\pegas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 P:\home\localhost\pegas\index.php(109): Kohana_Request->execute()
#14 {main}
2012-08-29 16:08:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-29 16:08:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\pegas\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-29 16:11:01 --- ERROR: Kohana_Exception [ 0 ]: Database method list_columns is not supported by Kohana_Database_PDO ~ MODPATH\database\classes\kohana\database\pdo.php [ 241 ]
2012-08-29 16:11:01 --- STRACE: Kohana_Exception [ 0 ]: Database method list_columns is not supported by Kohana_Database_PDO ~ MODPATH\database\classes\kohana\database\pdo.php [ 241 ]
--
#0 P:\home\localhost\pegas\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_PDO->list_columns('user_tokens')
#1 P:\home\localhost\pegas\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#2 P:\home\localhost\pegas\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#3 P:\home\localhost\pegas\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#4 P:\home\localhost\pegas\modules\orm\classes\model\auth\user\token.php(22): Kohana_ORM->__construct(Array)
#5 P:\home\localhost\pegas\modules\orm\classes\kohana\orm.php(37): Model_Auth_User_Token->__construct(Array)
#6 P:\home\localhost\pegas\modules\orm\classes\kohana\auth\orm.php(154): Kohana_ORM::factory('user_token', Array)
#7 P:\home\localhost\pegas\modules\orm\classes\kohana\auth\orm.php(194): Kohana_Auth_ORM->auto_login()
#8 P:\home\localhost\pegas\application\classes\page.php(22): Kohana_Auth_ORM->get_user()
#9 [internal function]: Page->before()
#10 P:\home\localhost\pegas\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Main))
#11 P:\home\localhost\pegas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 P:\home\localhost\pegas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 P:\home\localhost\pegas\index.php(109): Kohana_Request->execute()
#14 {main}
2012-08-29 16:11:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-29 16:11:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\pegas\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-29 16:11:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-29 16:11:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\pegas\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-29 16:11:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-29 16:11:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\pegas\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-29 16:11:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-29 16:11:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\pegas\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-29 16:11:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-29 16:11:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\pegas\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-29 16:11:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-29 16:11:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\pegas\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-29 16:11:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-29 16:11:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-29 16:11:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/h2bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\pegas\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-29 16:11:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/default/css/images/bg.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 P:\home\localhost\pegas\index.php(109): Kohana_Request->execute()
#1 {main}