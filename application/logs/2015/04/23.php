<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-04-23 11:49:57 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry 'f' for key 'uniq_username' [ INSERT INTO `users` (`username`, `password`, `email`) VALUES ('f', '11ab8286a41a334c77f913ebb0ea64a35b6ff9f753615771ebbd05164f8207f2', 'f@ff') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2015-04-23 11:49:57 --- DEBUG: #0 Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 Z:\home\kohana\www\application\classes\Model\Register.php(25): Kohana_ORM->save()
#4 Z:\home\kohana\www\application\classes\Controller\Auth.php(72): Model_Register->register('f', 'f', 'f', 'f@ff', '3')
#5 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Auth->action_register()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#8 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\kohana\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251