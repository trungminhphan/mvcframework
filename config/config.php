<?php
Config::set('site_name', 'Site name');
Config::set('languages', array('vn', 'en'));

Config::set('routes', array(
	'default' => '',
	'admin' => 'admin_'
));

Config::set('default_route', 'default');
Config::set('default_language', 'vn');
Config::set('default_controller', 'pages');
Config::set('default_action', 'index');

Config::set('db.host' , 'localhost');
Config::set('db.user' , '');
Config::set('db.password' , '');
Config::set('db.db_name', 'mvcframework');
Config::set('db.port', 27017);

?>
