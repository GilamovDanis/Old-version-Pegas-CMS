<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-02-06 09:41:37 --- CRITICAL: Database_Exception [ 1049 ]: Unknown database 'pegascms' ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 108 ] in J:\xampp\htdocs\Pegas-CMS\modules\database\classes\Kohana\Database\MySQL.php:75
2013-02-06 09:41:37 --- DEBUG: #0 J:\xampp\htdocs\Pegas-CMS\modules\database\classes\Kohana\Database\MySQL.php(75): Kohana_Database_MySQL->_select_db('pegascms')
#1 J:\xampp\htdocs\Pegas-CMS\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#2 J:\xampp\htdocs\Pegas-CMS\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 J:\xampp\htdocs\Pegas-CMS\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('guestbooks')
#4 J:\xampp\htdocs\Pegas-CMS\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#5 J:\xampp\htdocs\Pegas-CMS\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#6 J:\xampp\htdocs\Pegas-CMS\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#7 J:\xampp\htdocs\Pegas-CMS\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#8 J:\xampp\htdocs\Pegas-CMS\modules\guestbook\classes\Controller\Guestbook.php(12): Kohana_ORM::factory('Guestbook')
#9 J:\xampp\htdocs\Pegas-CMS\system\classes\Kohana\Controller.php(84): Controller_Guestbook->action_index()
#10 [internal function]: Kohana_Controller->execute()
#11 J:\xampp\htdocs\Pegas-CMS\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Guestbook))
#12 J:\xampp\htdocs\Pegas-CMS\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 J:\xampp\htdocs\Pegas-CMS\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 J:\xampp\htdocs\Pegas-CMS\index.php(118): Kohana_Request->execute()
#15 {main} in J:\xampp\htdocs\Pegas-CMS\modules\database\classes\Kohana\Database\MySQL.php:75