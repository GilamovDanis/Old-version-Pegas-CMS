<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-11-29 19:12:20 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'COUNT("*")' in 'field list' [ SELECT `COUNT("*")` AS `total_users` FROM `users` WHERE `username` = 'Test' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ] in P:\home\localhost\Pegas-CMS\modules\database\classes\kohana\database\query.php:251
2012-11-29 19:12:20 --- DEBUG: #0 P:\home\localhost\Pegas-CMS\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `COUNT("...', false, Array)
#1 P:\home\localhost\Pegas-CMS\modules\guestbook\classes\Model\Guestbook.php(10): Kohana_Database_Query->execute()
#2 [internal function]: Model_Guestbook::unique_key('Test')
#3 P:\home\localhost\Pegas-CMS\system\classes\kohana\validation.php(410): ReflectionMethod->invokeArgs(NULL, Array)
#4 P:\home\localhost\Pegas-CMS\modules\guestbook\classes\Controller\Guestbook.php(57): Kohana_Validation->check()
#5 P:\home\localhost\Pegas-CMS\system\classes\kohana\controller.php(84): Controller_Guestbook->action_add()
#6 [internal function]: Kohana_Controller->execute()
#7 P:\home\localhost\Pegas-CMS\system\classes\kohana\request\client\internal.php(97): ReflectionMethod->invoke(Object(Controller_Guestbook))
#8 P:\home\localhost\Pegas-CMS\system\classes\kohana\request\client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 P:\home\localhost\Pegas-CMS\system\classes\kohana\request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 P:\home\localhost\Pegas-CMS\index.php(118): Kohana_Request->execute()
#11 {main} in P:\home\localhost\Pegas-CMS\modules\database\classes\kohana\database\query.php:251