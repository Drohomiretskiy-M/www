<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-04-08 23:19:09 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH\classes\Model\Register.php [ 22 ] in file:line
2015-04-08 23:19:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-08 23:20:32 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '1' for key 'uniq_username' [ INSERT INTO `users` (`username`, `password`, `email`) VALUES ('1', '1', '') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2015-04-08 23:20:32 --- DEBUG: #0 Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 Z:\home\kohana\www\application\classes\Model\Register.php(18): Kohana_ORM->save()
#4 Z:\home\kohana\www\application\classes\Controller\Auth.php(77): Model_Register->register('', '', '', '1', '1', '1', '')
#5 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Auth->action_register()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#8 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\kohana\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2015-04-08 23:34:35 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry 'qwe@qq' for key 'uniq_email' [ INSERT INTO `users` (`username`, `password`, `email`) VALUES ('12222', '12', 'qwe@qq') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2015-04-08 23:34:35 --- DEBUG: #0 Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 Z:\home\kohana\www\application\classes\Model\Register.php(18): Kohana_ORM->save()
#4 Z:\home\kohana\www\application\classes\Controller\Auth.php(77): Model_Register->register('', '', '', '12222', '12', '12', 'qwe@qq', 1)
#5 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Auth->action_register()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#8 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\kohana\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251