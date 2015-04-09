<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-04-03 00:03:45 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Session_Native::$get ~ APPPATH\classes\Controller\Auth.php [ 17 ] in Z:\home\kohana\www\application\classes\Controller\Auth.php:17
2015-04-03 00:03:45 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\Auth.php(17): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\home\kohana\...', 17, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Auth->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\Auth.php:17
2015-04-03 00:03:50 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Session_Native::$get ~ APPPATH\classes\Controller\Auth.php [ 17 ] in Z:\home\kohana\www\application\classes\Controller\Auth.php:17
2015-04-03 00:03:50 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\Auth.php(17): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\home\kohana\...', 17, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Auth->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\Auth.php:17
2015-04-03 00:11:41 --- CRITICAL: ErrorException [ 2048 ]: Non-static method Kohana_Session::get() should not be called statically, assuming $this from incompatible context ~ APPPATH\classes\Controller\Auth.php [ 34 ] in Z:\home\kohana\www\application\classes\Controller\Auth.php:34
2015-04-03 00:11:41 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\Auth.php(34): Kohana_Core::error_handler(2048, 'Non-static meth...', 'Z:\home\kohana\...', 34, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Auth->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\Auth.php:34
2015-04-03 00:48:11 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ':', expecting ',' or ';' ~ APPPATH\views\pages\login.php [ 19 ] in file:line
2015-04-03 00:48:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-03 00:48:33 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function get_user() ~ APPPATH\views\pages\login.php [ 18 ] in file:line
2015-04-03 00:48:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-03 01:28:07 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Register' not found ~ APPPATH\classes\Controller\Auth.php [ 71 ] in file:line
2015-04-03 01:28:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-03 13:44:54 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Adduser' not found ~ APPPATH\classes\Model\Register.php [ 10 ] in file:line
2015-04-03 13:44:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-03 13:45:51 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '' for key 'uniq_email' [ INSERT INTO `users` (`username`, `password`) VALUES ('1', '12345') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2015-04-03 13:45:51 --- DEBUG: #0 Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 Z:\home\kohana\www\application\classes\Model\Register.php(16): Kohana_ORM->save()
#4 Z:\home\kohana\www\application\classes\Controller\Auth.php(76): Model_Register->register('1', '1', '1', '1', '', '', '1@1')
#5 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Auth->action_register()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#8 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\kohana\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2015-04-03 13:46:53 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '' for key 'uniq_email' [ INSERT INTO `users` (`username`, `password`) VALUES ('1', '12345') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2015-04-03 13:46:53 --- DEBUG: #0 Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 Z:\home\kohana\www\application\classes\Model\Register.php(16): Kohana_ORM->save()
#4 Z:\home\kohana\www\application\classes\Controller\Auth.php(76): Model_Register->register('1', '1', '1', '1', '1', '1', '1@1')
#5 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Auth->action_register()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#8 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\kohana\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2015-04-03 13:47:34 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '' for key 'uniq_email' [ INSERT INTO `users` (`password`) VALUES ('12345') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2015-04-03 13:47:34 --- DEBUG: #0 Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 Z:\home\kohana\www\application\classes\Model\Register.php(16): Kohana_ORM->save()
#4 Z:\home\kohana\www\application\classes\Controller\Auth.php(76): Model_Register->register('1', '1', '1', '1', '1', '1', '1@1')
#5 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Auth->action_register()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#8 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\kohana\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2015-04-03 13:47:47 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '' for key 'uniq_email' [ INSERT INTO `users` () VALUES () ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2015-04-03 13:47:47 --- DEBUG: #0 Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 Z:\home\kohana\www\application\classes\Model\Register.php(16): Kohana_ORM->save()
#4 Z:\home\kohana\www\application\classes\Controller\Auth.php(76): Model_Register->register('1', '1', '1', '1', '1', '1', '1@1')
#5 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Auth->action_register()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#8 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\kohana\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2015-04-03 13:48:19 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '' for key 'uniq_email' [ INSERT INTO `users` () VALUES () ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2015-04-03 13:48:19 --- DEBUG: #0 Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 Z:\home\kohana\www\application\classes\Model\Register.php(16): Kohana_ORM->save()
#4 Z:\home\kohana\www\application\classes\Controller\Auth.php(76): Model_Register->register('1', '1', '1', '1', '1', '1', '1@1')
#5 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Auth->action_register()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#8 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\kohana\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2015-04-03 13:52:15 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '' for key 'uniq_email' [ INSERT INTO `users` (`username`, `password`) VALUES ('', '2@222') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2015-04-03 13:52:15 --- DEBUG: #0 Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 Z:\home\kohana\www\application\classes\Model\Register.php(17): Kohana_ORM->save()
#4 Z:\home\kohana\www\application\classes\Controller\Auth.php(76): Model_Register->register('', '', '', '', '', '', '2@222')
#5 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Auth->action_register()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#8 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\kohana\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2015-04-03 13:53:05 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '' for key 'uniq_username' [ INSERT INTO `users` (`email`) VALUES ('2@222') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2015-04-03 13:53:05 --- DEBUG: #0 Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 Z:\home\kohana\www\application\classes\Model\Register.php(17): Kohana_ORM->save()
#4 Z:\home\kohana\www\application\classes\Controller\Auth.php(76): Model_Register->register('', '', '', '', '', '', '2@222')
#5 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Auth->action_register()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#8 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\kohana\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2015-04-03 14:10:37 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function register() ~ APPPATH\classes\Controller\Auth.php [ 74 ] in file:line
2015-04-03 14:10:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-03 14:10:50 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant register - assumed 'register' ~ APPPATH\classes\Controller\Auth.php [ 74 ] in Z:\home\kohana\www\application\classes\Controller\Auth.php:74
2015-04-03 14:10:50 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\Auth.php(74): Kohana_Core::error_handler(8, 'Use of undefine...', 'Z:\home\kohana\...', 74, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Auth->action_register()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\Auth.php:74
2015-04-03 14:25:00 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '3' for key 'uniq_username' [ INSERT INTO `users` (`username`, `password`, `email`) VALUES ('3', '', '2@333') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2015-04-03 14:25:00 --- DEBUG: #0 Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 Z:\home\kohana\www\application\classes\Model\Register.php(18): Kohana_ORM->save()
#4 Z:\home\kohana\www\application\classes\Controller\Auth.php(77): Model_Register->register('3', '3', '3', '3', '', '', '2@333')
#5 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Auth->action_register()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#8 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\kohana\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2015-04-03 15:55:01 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '' for key 'uniq_email' [ INSERT INTO `users` (`username`, `password`, `email`) VALUES ('1', '1', '') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2015-04-03 15:55:01 --- DEBUG: #0 Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 Z:\home\kohana\www\application\classes\Model\Register.php(22): Kohana_ORM->save()
#4 Z:\home\kohana\www\application\classes\Controller\Auth.php(77): Model_Register->register('', '', '', '1', '1', '1', '')
#5 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Auth->action_register()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#8 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\kohana\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2015-04-03 15:55:34 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '' for key 'uniq_email' [ INSERT INTO `users` (`username`, `password`, `email`) VALUES ('1', '1', '') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2015-04-03 15:55:34 --- DEBUG: #0 Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 Z:\home\kohana\www\application\classes\Model\Register.php(22): Kohana_ORM->save()
#4 Z:\home\kohana\www\application\classes\Controller\Auth.php(77): Model_Register->register('1', '1', '1', '1', '1', '1', '')
#5 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Auth->action_register()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#8 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\kohana\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2015-04-03 15:55:49 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '' for key 'uniq_email' [ INSERT INTO `users` (`username`, `password`, `email`) VALUES ('7', '7', '') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2015-04-03 15:55:49 --- DEBUG: #0 Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 Z:\home\kohana\www\application\classes\Model\Register.php(22): Kohana_ORM->save()
#4 Z:\home\kohana\www\application\classes\Controller\Auth.php(77): Model_Register->register('7', '7', '7', '7', '7', '7', '')
#5 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Auth->action_register()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#8 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\kohana\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251