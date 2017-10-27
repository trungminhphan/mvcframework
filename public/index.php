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
$router->add('admin/forbidden', ['controller' => 'HomeController', 'action' => 'forbidden']);

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

$router->add('nha-san-xuat', ['controller' => 'ProducerController', 'action' => 'index']);
$router->add('nha-san-xuat/add', ['controller' => 'ProducerController', 'action' => 'add']);
$router->add('nha-san-xuat/create', ['controller' => 'ProducerController', 'action' => 'create']);
$router->add('nha-san-xuat/edit', ['controller' => 'ProducerController', 'action' => 'edit']);
$router->add('nha-san-xuat/update', ['controller' => 'ProducerController', 'action' => 'update']);
$router->add('nha-san-xuat/delete', ['controller' => 'ProducerController', 'action' => 'delete']);

$router->add('nhom-san-pham', ['controller' => 'ProductGroupController', 'action' => 'index']);
$router->add('nhom-san-pham/add', ['controller' => 'ProductGroupController', 'action' => 'add']);
$router->add('nhom-san-pham/create', ['controller' => 'ProductGroupController', 'action' => 'create']);
$router->add('nhom-san-pham/edit', ['controller' => 'ProductGroupController', 'action' => 'edit']);
$router->add('nhom-san-pham/update', ['controller' => 'ProductGroupController', 'action' => 'update']);
$router->add('nhom-san-pham/delete', ['controller' => 'ProductGroupController', 'action' => 'delete']);

$router->add('thuoc-tinh-san-pham', ['controller' => 'AttributeController', 'action' => 'index']);
$router->add('thuoc-tinh-san-pham/add', ['controller' => 'AttributeController', 'action' => 'add']);
$router->add('thuoc-tinh-san-pham/create', ['controller' => 'AttributeController', 'action' => 'create']);
$router->add('thuoc-tinh-san-pham/edit', ['controller' => 'AttributeController', 'action' => 'edit']);
$router->add('thuoc-tinh-san-pham/update', ['controller' => 'AttributeController', 'action' => 'update']);
$router->add('thuoc-tinh-san-pham/delete', ['controller' => 'AttributeController', 'action' => 'delete']);

$router->add('don-vi-tien-te', ['controller' => 'CurrencyController', 'action' => 'index']);
$router->add('don-vi-tien-te/add', ['controller' => 'CurrencyController', 'action' => 'add']);
$router->add('don-vi-tien-te/create', ['controller' => 'CurrencyController', 'action' => 'create']);
$router->add('don-vi-tien-te/edit', ['controller' => 'CurrencyController', 'action' => 'edit']);
$router->add('don-vi-tien-te/update', ['controller' => 'CurrencyController', 'action' => 'update']);
$router->add('don-vi-tien-te/delete', ['controller' => 'CurrencyController', 'action' => 'delete']);

$router->add('don-hang', ['controller' => 'OrderController', 'action' => 'index']);
$router->add('don-hang/add', ['controller' => 'OrderController', 'action' => 'add']);
$router->add('don-hang/create', ['controller' => 'OrderController', 'action' => 'create']);
$router->add('don-hang/edit', ['controller' => 'OrderController', 'action' => 'edit']);
$router->add('don-hang/update', ['controller' => 'OrderController', 'action' => 'update']);
$router->add('don-hang/delete', ['controller' => 'OrderController', 'action' => 'delete']);

$router->add('tong-quan-van-chuyen', ['controller' => 'DeliveryController', 'action' => 'index']);
$router->add('van-chuyen', ['controller' => 'DeliveryController', 'action' => 'index']);
$router->add('quan-ly-thu-ho', ['controller' => 'DeliveryController', 'action' => 'index']);
$router->add('cau-hinh-van-chuyen', ['controller' => 'DeliveryController', 'action' => 'index']);

$router->add('san-pham', ['controller' => 'ProductController', 'action' => 'index']);
$router->add('san-pham/add', ['controller' => 'ProductController', 'action' => 'add']);
$router->add('san-pham-ton-kho', ['controller' => 'ProductController', 'action' => 'index']);

$router->add('khach-hang', ['controller' => 'CustomerController', 'action' => 'index']);
$router->add('bao-cao', ['controller' => 'ReportController', 'action' => 'index']);

$router->add('khuyen-mai', ['controller' => 'PromotionController', 'action' => 'index']);

#GET - POST
$router->add('image/uploads', ['controller' => 'ImagesController', 'action' => 'uploads']);
$router->add('image/delete', ['controller' => 'ImagesController', 'action' => 'delete']);

//Frontend
$router->add('', ['controller' => 'HomeController', 'action' => 'index']);
$router->add('chi-tiet-san-pham', ['controller' => 'HomeController', 'action' => 'ProductDetail']);

$router->dispatch($_SERVER['QUERY_STRING']);
