<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-04-03 18:18:33 --- CRITICAL: Kohana_Exception [ 0 ]: The phone property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in J:\xampp\htdocs\Pegas-CMS\modules\orm\classes\Kohana\ORM.php:600
2013-04-03 18:18:33 --- DEBUG: #0 J:\xampp\htdocs\Pegas-CMS\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('phone')
#1 J:\xampp\htdocs\Pegas-CMS\modules\user\views\user\main.php(7): Kohana_ORM->__get('phone')
#2 J:\xampp\htdocs\Pegas-CMS\system\classes\Kohana\View.php(61): include('J:\xampp\htdocs...')
#3 J:\xampp\htdocs\Pegas-CMS\system\classes\Kohana\View.php(348): Kohana_View::capture('J:\xampp\htdocs...', Array)
#4 J:\xampp\htdocs\Pegas-CMS\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 J:\xampp\htdocs\Pegas-CMS\themes\default\views\default.php(61): Kohana_View->__toString()
#6 J:\xampp\htdocs\Pegas-CMS\system\classes\Kohana\View.php(61): include('J:\xampp\htdocs...')
#7 J:\xampp\htdocs\Pegas-CMS\system\classes\Kohana\View.php(348): Kohana_View::capture('themes/default/...', Array)
#8 J:\xampp\htdocs\Pegas-CMS\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 J:\xampp\htdocs\Pegas-CMS\application\classes\Controller\Page.php(53): Kohana_Controller_Template->after()
#10 J:\xampp\htdocs\Pegas-CMS\system\classes\Kohana\Controller.php(87): Controller_Page->after()
#11 [internal function]: Kohana_Controller->execute()
#12 J:\xampp\htdocs\Pegas-CMS\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#13 J:\xampp\htdocs\Pegas-CMS\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 J:\xampp\htdocs\Pegas-CMS\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 J:\xampp\htdocs\Pegas-CMS\index.php(133): Kohana_Request->execute()
#16 {main} in J:\xampp\htdocs\Pegas-CMS\modules\orm\classes\Kohana\ORM.php:600