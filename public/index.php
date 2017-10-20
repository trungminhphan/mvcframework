<?php

/**
 * Front controller
 *
 * PHP version 7.0
 */

/**
 * Composer
 */
require dirname(__DIR__) . '/vendor/autoload.php';

/**
 * Error and Exception handling
 */
error_reporting(E_ALL);
set_error_handler('Core\Error::errorHandler');
set_exception_handler('Core\Error::exceptionHandler');


/**
 * Routing
 */
$router = new Core\Router();
$session = new Core\Sessions();
// Add the routes
//Backend

$router->add('admin',['controller' => 'HomeController', 'action' => 'admin']);
$router->add('admin/login',['controller' => 'UserController', 'action' => 'getLogin']);
$router->add('admin/auth',['controller' => 'UserController', 'action' => 'auth']);
$router->add('admin/logout',['controller' => 'UserController', 'action' => 'logout']);

$router->add('tai-khoan', ['controller' => 'UserController', 'action' => 'index']);
$router->add('tai-khoan/add', ['controller' => 'UserController', 'action' => 'add']);
$router->add('tai-khoan/create', ['controller' => 'UserController', 'action' => 'create']);
$router->add('tai-khoan/edit', ['controller' => 'UserController', 'action' => 'edit']);
$router->add('tai-khoan/update', ['controller' => 'UserController', 'action' => 'update']);
$router->add('tai-khoan/delete', ['controller' => 'UserController', 'action' => 'delete']);

$router->add('loai-san-pham', ['controller' => 'ProductTypeController', 'action' => 'index']);
$router->add('loai-san-pham/add', ['controller' => 'ProductTypeController', 'action' => 'add']);
$router->add('loai-san-pham/create', ['controller' => 'ProductTypeController', 'action' => 'create']);
$router->add('loai-san-pham/edit', ['controller' => 'ProductTypeController', 'action' => 'edit']);
$router->add('loai-san-pham/update', ['controller' => 'ProductTypeController', 'action' => 'update']);
$router->add('loai-san-pham/delete', ['controller' => 'ProductTypeController', 'action' => 'delete']);

$router->add('danh-muc-nha-san-xuat', ['controller' => 'ProducerController', 'action' => 'index']);
$router->add('danh-muc-nhom-san-pham', ['controller' => 'ProductGroupController', 'action' => 'index']);

#GET - POST
$router->add('image/uploads', ['controller' => 'ImagesController', 'action' => 'uploads']);
$router->add('image/delete', ['controller' => 'ImagesController', 'action' => 'delete']);

//Frontend
$router->add('', ['controller' => 'HomeController', 'action' => 'index']);

$router->dispatch($_SERVER['QUERY_STRING']);
