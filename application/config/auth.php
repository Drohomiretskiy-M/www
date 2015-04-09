<?php defined('SYSPATH') OR die('No direct access allowed.');

return array(

	'driver'       => 'ORM',
	'hash_method'  => 'sha256',
	'hash_key'     => '2, 4, 6, 8, 10, 12, 14',
	'lifetime'     => 1209600,
	'session_type' => Session::$default,
	'session_key'  => 'auth_user',

	// Username/password combinations for the Auth File driver
	'users' => array(
		//'admin' => 'c532d1ccb8d6235d3e475058f73486511c7b85ff4ea58320ca2bde4b5a2586d6',
),

);
