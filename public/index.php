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

$router->add('users', ['controller' => 'UserController', 'action' => 'index']);
$router->add('danh-muc-loai-san-pham', ['controller' => 'ProductTypeController', 'action' => 'index']);
$router->add('them-danh-muc-loai-san-pham', ['controller' => 'ProductTypeController', 'action' => 'add']);
$router->add('sua-danh-muc-loai-san-pham', ['controller' => 'ProductTypeController', 'action' => 'edit']);
$router->add('cap-nhat-danh-muc-loai-san-pham', ['controller' => 'ProductTypeController', 'action' => 'update']);
$router->add('tao-danh-muc-loai-san-pham', ['controller' => 'ProductTypeController', 'action' => 'create']);
$router->add('xoa-danh-muc-loai-san-pham', ['controller' => 'ProductTypeController', 'action' => 'delete']);

$router->add('danh-muc-nha-san-xuat', ['controller' => 'ProducerController', 'action' => 'index']);
$router->add('danh-muc-nhom-san-pham', ['controller' => 'ProductGroupController', 'action' => 'index']);


//Frontend
$router->add('', ['controller' => 'HomeController', 'action' => 'index']);

$router->dispatch($_SERVER['QUERY_STRING']);
