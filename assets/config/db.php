<?php

return array(
	'default' => array(
		'user' => 'root',
		'password' => 'mysqlroot',
		'driver' => 'PDO',

		//'Connection' is required if you use the PDO driver
		'connection' => 'mysql:host=db;dbname=phpixie',

		// 'db' and 'host' are required if you use Mysql driver
		'db'  => 'phpixie',
		'host' => 'localhost',
	)
);
