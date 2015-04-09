<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-04-02 17:58:15 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: auth ~ APPPATH\views\basic.php [ 43 ] in Z:\home\kohana\www\application\views\basic.php:43
2015-04-02 17:58:15 --- DEBUG: #0 Z:\home\kohana\www\application\views\basic.php(43): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 43, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(62): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#7 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\kohana\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\kohana\www\application\views\basic.php:43
2015-04-02 18:03:12 --- CRITICAL: View_Exception [ 0 ]: The requested view auth could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in Z:\home\kohana\www\system\classes\Kohana\View.php:145
2015-04-02 18:03:12 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\View.php(145): Kohana_View->set_filename('auth')
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('auth', NULL)
#2 Z:\home\kohana\www\application\classes\Controller\Pages.php(7): Kohana_View::factory('auth')
#3 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Pages->action_portfolio()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\kohana\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\kohana\www\system\classes\Kohana\View.php:145
2015-04-02 23:01:36 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Auth::instanse() ~ APPPATH\classes\Controller\Pages.php [ 52 ] in file:line
2015-04-02 23:01:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-02 23:02:08 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Auth_File::logen_in() ~ APPPATH\classes\Controller\Pages.php [ 53 ] in file:line
2015-04-02 23:02:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-02 23:02:53 --- CRITICAL: ErrorException [ 1 ]: Class 'perent' not found ~ APPPATH\classes\Controller\Pages.php [ 55 ] in file:line
2015-04-02 23:02:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-02 23:46:40 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\Controller\Auth.php [ 16 ] in file:line
2015-04-02 23:46:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-02 23:48:00 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\Controller\Auth.php [ 16 ] in file:line
2015-04-02 23:48:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-02 23:48:01 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\Controller\Auth.php [ 16 ] in file:line
2015-04-02 23:48:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-02 23:48:13 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\Controller\Auth.php [ 16 ] in file:line
2015-04-02 23:48:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-02 23:50:09 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\Auth.php [ 19 ] in file:line
2015-04-02 23:50:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-02 23:50:10 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\Auth.php [ 19 ] in file:line
2015-04-02 23:50:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-02 23:50:10 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\Auth.php [ 19 ] in file:line
2015-04-02 23:50:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-02 23:50:14 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\Auth.php [ 19 ] in file:line
2015-04-02 23:50:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-02 23:52:11 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: _SERER ~ APPPATH\classes\Controller\Acount.php [ 10 ] in Z:\home\kohana\www\application\classes\Controller\Acount.php:10
2015-04-02 23:52:11 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\Acount.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 10, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(69): Controller_Acount->before()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Acount))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\Acount.php:10