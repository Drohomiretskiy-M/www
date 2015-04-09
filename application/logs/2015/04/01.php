<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-04-01 00:05:06 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\Pages.php [ 83 ] in file:line
2015-04-01 00:05:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-01 00:05:32 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\Pages.php [ 87 ] in file:line
2015-04-01 00:05:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-01 00:06:23 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\Pages.php [ 87 ] in file:line
2015-04-01 00:06:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-01 00:07:38 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: massage ~ APPPATH\views\pages\loginpage.php [ 2 ] in Z:\home\kohana\www\application\views\pages\loginpage.php:2
2015-04-01 00:07:38 --- DEBUG: #0 Z:\home\kohana\www\application\views\pages\loginpage.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 2, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(62): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 Z:\home\kohana\www\application\views\basic.php(50): Kohana_View->__toString()
#5 Z:\home\kohana\www\system\classes\Kohana\View.php(62): include('Z:\home\kohana\...')
#6 Z:\home\kohana\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\kohana\...', Array)
#7 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#11 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\kohana\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\kohana\www\application\views\pages\loginpage.php:2
2015-04-01 00:08:54 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: massage ~ APPPATH\views\pages\loginpage.php [ 2 ] in Z:\home\kohana\www\application\views\pages\loginpage.php:2
2015-04-01 00:08:54 --- DEBUG: #0 Z:\home\kohana\www\application\views\pages\loginpage.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 2, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(62): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 Z:\home\kohana\www\application\views\basic.php(50): Kohana_View->__toString()
#5 Z:\home\kohana\www\system\classes\Kohana\View.php(62): include('Z:\home\kohana\...')
#6 Z:\home\kohana\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\kohana\...', Array)
#7 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#11 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\kohana\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\kohana\www\application\views\pages\loginpage.php:2
2015-04-01 00:14:21 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\pages\loginpage.php [ 2 ] in Z:\home\kohana\www\application\views\pages\loginpage.php:2
2015-04-01 00:14:21 --- DEBUG: #0 Z:\home\kohana\www\application\views\pages\loginpage.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 2, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(62): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 Z:\home\kohana\www\application\views\basic.php(50): Kohana_View->__toString()
#5 Z:\home\kohana\www\system\classes\Kohana\View.php(62): include('Z:\home\kohana\...')
#6 Z:\home\kohana\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\kohana\...', Array)
#7 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#11 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\kohana\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\kohana\www\application\views\pages\loginpage.php:2
2015-04-01 00:14:45 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: mas ~ APPPATH\views\pages\loginpage.php [ 2 ] in Z:\home\kohana\www\application\views\pages\loginpage.php:2
2015-04-01 00:14:45 --- DEBUG: #0 Z:\home\kohana\www\application\views\pages\loginpage.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 2, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(62): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 Z:\home\kohana\www\application\views\basic.php(50): Kohana_View->__toString()
#5 Z:\home\kohana\www\system\classes\Kohana\View.php(62): include('Z:\home\kohana\...')
#6 Z:\home\kohana\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\kohana\...', Array)
#7 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#11 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\kohana\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\kohana\www\application\views\pages\loginpage.php:2
2015-04-01 00:15:15 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: mas ~ APPPATH\views\pages\loginpage.php [ 2 ] in Z:\home\kohana\www\application\views\pages\loginpage.php:2
2015-04-01 00:15:15 --- DEBUG: #0 Z:\home\kohana\www\application\views\pages\loginpage.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 2, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(62): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 Z:\home\kohana\www\application\views\basic.php(50): Kohana_View->__toString()
#5 Z:\home\kohana\www\system\classes\Kohana\View.php(62): include('Z:\home\kohana\...')
#6 Z:\home\kohana\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\kohana\...', Array)
#7 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#11 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\kohana\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\kohana\www\application\views\pages\loginpage.php:2
2015-04-01 00:18:17 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\Pages.php [ 84 ] in file:line
2015-04-01 00:18:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-01 00:18:35 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 158 ] in Z:\home\kohana\www\system\classes\Kohana\Cookie.php:67
2015-04-01 00:18:35 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 Z:\home\kohana\www\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 Z:\home\kohana\www\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in Z:\home\kohana\www\system\classes\Kohana\Cookie.php:67
2015-04-01 00:18:35 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 158 ] in Z:\home\kohana\www\system\classes\Kohana\Cookie.php:67
2015-04-01 00:18:35 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 Z:\home\kohana\www\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 Z:\home\kohana\www\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in Z:\home\kohana\www\system\classes\Kohana\Cookie.php:67
2015-04-01 00:18:35 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 158 ] in Z:\home\kohana\www\system\classes\Kohana\Cookie.php:67
2015-04-01 00:18:35 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 Z:\home\kohana\www\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 Z:\home\kohana\www\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in Z:\home\kohana\www\system\classes\Kohana\Cookie.php:67
2015-04-01 00:18:35 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 158 ] in Z:\home\kohana\www\system\classes\Kohana\Cookie.php:67
2015-04-01 00:18:35 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 Z:\home\kohana\www\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 Z:\home\kohana\www\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in Z:\home\kohana\www\system\classes\Kohana\Cookie.php:67
2015-04-01 00:18:37 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 158 ] in Z:\home\kohana\www\system\classes\Kohana\Cookie.php:67
2015-04-01 00:18:37 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 Z:\home\kohana\www\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 Z:\home\kohana\www\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in Z:\home\kohana\www\system\classes\Kohana\Cookie.php:67
2015-04-01 00:18:42 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 158 ] in Z:\home\kohana\www\system\classes\Kohana\Cookie.php:67
2015-04-01 00:18:42 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 Z:\home\kohana\www\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 Z:\home\kohana\www\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in Z:\home\kohana\www\system\classes\Kohana\Cookie.php:67
2015-04-01 00:18:47 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 158 ] in Z:\home\kohana\www\system\classes\Kohana\Cookie.php:67
2015-04-01 00:18:47 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 Z:\home\kohana\www\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 Z:\home\kohana\www\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in Z:\home\kohana\www\system\classes\Kohana\Cookie.php:67
2015-04-01 00:19:26 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 158 ] in Z:\home\kohana\www\system\classes\Kohana\Cookie.php:67
2015-04-01 00:19:26 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 Z:\home\kohana\www\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 Z:\home\kohana\www\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in Z:\home\kohana\www\system\classes\Kohana\Cookie.php:67
2015-04-01 00:21:20 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 158 ] in Z:\home\kohana\www\system\classes\Kohana\Cookie.php:67
2015-04-01 00:21:20 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 Z:\home\kohana\www\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 Z:\home\kohana\www\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in Z:\home\kohana\www\system\classes\Kohana\Cookie.php:67
2015-04-01 00:22:24 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\Pages.php [ 84 ] in file:line
2015-04-01 00:22:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-01 00:31:07 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\Controller\Pages.php [ 72 ] in Z:\home\kohana\www\application\classes\Controller\Pages.php:72
2015-04-01 00:31:07 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\Pages.php(72): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 72, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Pages->action_loginpage()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\Pages.php:72
2015-04-01 00:49:32 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\Controller\Pages.php [ 72 ] in Z:\home\kohana\www\application\classes\Controller\Pages.php:72
2015-04-01 00:49:32 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\Pages.php(72): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 72, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Pages->action_loginpage()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\Pages.php:72
2015-04-01 00:49:36 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\Controller\Pages.php [ 72 ] in Z:\home\kohana\www\application\classes\Controller\Pages.php:72
2015-04-01 00:49:36 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\Pages.php(72): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 72, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Pages->action_loginpage()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\Pages.php:72
2015-04-01 00:50:03 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function get_user() ~ APPPATH\classes\Controller\Pages.php [ 79 ] in file:line
2015-04-01 00:50:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-01 00:50:49 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function logged_in() ~ APPPATH\classes\Controller\Pages.php [ 79 ] in file:line
2015-04-01 00:50:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-01 01:06:44 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\Controller\Pages.php [ 73 ] in Z:\home\kohana\www\application\classes\Controller\Pages.php:73
2015-04-01 01:06:44 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\Pages.php(73): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 73, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Pages->action_loginpage()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\Pages.php:73
2015-04-01 02:26:40 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')', expecting T_PAAMAYIM_NEKUDOTAYIM ~ APPPATH\views\pages\loginpage.php [ 5 ] in file:line
2015-04-01 02:26:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-01 02:29:15 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')', expecting T_PAAMAYIM_NEKUDOTAYIM ~ APPPATH\views\pages\loginpage.php [ 5 ] in file:line
2015-04-01 02:29:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-01 02:30:10 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')', expecting T_PAAMAYIM_NEKUDOTAYIM ~ APPPATH\views\pages\loginpage.php [ 5 ] in file:line
2015-04-01 02:30:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-01 02:31:58 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')', expecting T_PAAMAYIM_NEKUDOTAYIM ~ APPPATH\views\pages\loginpage.php [ 5 ] in file:line
2015-04-01 02:31:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-01 02:34:22 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: error ~ APPPATH\views\pages\loginpage.php [ 3 ] in Z:\home\kohana\www\application\views\pages\loginpage.php:3
2015-04-01 02:34:22 --- DEBUG: #0 Z:\home\kohana\www\application\views\pages\loginpage.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 3, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(62): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 Z:\home\kohana\www\application\views\basic.php(50): Kohana_View->__toString()
#5 Z:\home\kohana\www\system\classes\Kohana\View.php(62): include('Z:\home\kohana\...')
#6 Z:\home\kohana\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\kohana\...', Array)
#7 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#11 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\kohana\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\kohana\www\application\views\pages\loginpage.php:3
2015-04-01 02:36:10 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: error ~ APPPATH\views\pages\loginpage.php [ 3 ] in Z:\home\kohana\www\application\views\pages\loginpage.php:3
2015-04-01 02:36:10 --- DEBUG: #0 Z:\home\kohana\www\application\views\pages\loginpage.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 3, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(62): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 Z:\home\kohana\www\application\views\basic.php(50): Kohana_View->__toString()
#5 Z:\home\kohana\www\system\classes\Kohana\View.php(62): include('Z:\home\kohana\...')
#6 Z:\home\kohana\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\kohana\...', Array)
#7 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#11 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\kohana\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\kohana\www\application\views\pages\loginpage.php:3
2015-04-01 02:37:13 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')', expecting T_PAAMAYIM_NEKUDOTAYIM ~ APPPATH\views\pages\loginpage.php [ 5 ] in file:line
2015-04-01 02:37:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-01 02:38:21 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')', expecting T_PAAMAYIM_NEKUDOTAYIM ~ APPPATH\views\pages\loginpage.php [ 5 ] in file:line
2015-04-01 02:38:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-01 12:01:13 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')', expecting T_PAAMAYIM_NEKUDOTAYIM ~ APPPATH\views\pages\loginpage.php [ 5 ] in file:line
2015-04-01 12:01:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-01 12:27:22 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: log ~ APPPATH\views\pages\loginpage.php [ 3 ] in Z:\home\kohana\www\application\views\pages\loginpage.php:3
2015-04-01 12:27:22 --- DEBUG: #0 Z:\home\kohana\www\application\views\pages\loginpage.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 3, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(62): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 Z:\home\kohana\www\application\views\basic.php(50): Kohana_View->__toString()
#5 Z:\home\kohana\www\system\classes\Kohana\View.php(62): include('Z:\home\kohana\...')
#6 Z:\home\kohana\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\kohana\...', Array)
#7 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#11 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\kohana\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\kohana\www\application\views\pages\loginpage.php:3
2015-04-01 17:14:27 --- CRITICAL: View_Exception [ 0 ]: The requested view pages/loginpage could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in Z:\home\kohana\www\system\classes\Kohana\View.php:145
2015-04-01 17:14:27 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\View.php(145): Kohana_View->set_filename('pages/loginpage')
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('pages/loginpage', Array)
#2 Z:\home\kohana\www\application\classes\Controller\Pages.php(104): Kohana_View::factory('pages/loginpage', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Pages->action_loginpage()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\kohana\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\kohana\www\system\classes\Kohana\View.php:145
2015-04-01 17:38:47 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\Auth.php [ 13 ] in file:line
2015-04-01 17:38:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-01 17:39:16 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\Auth.php [ 13 ] in file:line
2015-04-01 17:39:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-01 17:39:17 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\Auth.php [ 13 ] in file:line
2015-04-01 17:39:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-01 17:39:17 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\Auth.php [ 13 ] in file:line
2015-04-01 17:39:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-01 17:39:18 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\Auth.php [ 13 ] in file:line
2015-04-01 17:39:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-01 17:40:04 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\Auth.php [ 13 ] in file:line
2015-04-01 17:40:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-01 17:40:12 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\Auth.php [ 13 ] in file:line
2015-04-01 17:40:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-01 17:41:41 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\Auth.php [ 13 ] in file:line
2015-04-01 17:41:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-01 17:42:06 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\Auth.php [ 13 ] in file:line
2015-04-01 17:42:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-01 17:42:16 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\Auth.php [ 13 ] in file:line
2015-04-01 17:42:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-01 17:42:29 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\Auth.php [ 13 ] in file:line
2015-04-01 17:42:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-01 17:42:33 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\Auth.php [ 13 ] in file:line
2015-04-01 17:42:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-01 17:45:03 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\Auth.php [ 13 ] in file:line
2015-04-01 17:45:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-01 17:45:29 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\Auth.php [ 13 ] in file:line
2015-04-01 17:45:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-01 17:46:04 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\Auth.php [ 13 ] in file:line
2015-04-01 17:46:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-01 17:48:07 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::instance() ~ APPPATH\classes\Controller\Auth.php [ 13 ] in file:line
2015-04-01 17:48:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-01 17:51:17 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\Auth.php [ 13 ] in file:line
2015-04-01 17:51:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line