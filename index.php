<?php
error_reporting(E_ALL);
ini_set("display_error", 1);
$GLOBALS['config'] = array(
  'appName' => 'mvcframeworkid',
  'version' => '0.0.1',
  'domain' => 'mvcframework.com',
  'path' => array(
    'app' =>'app/',
    'core' => 'core/',
    'session' => 'app/session/',
    'basePath' => 'E:/www/mvcframework/',
    'index' => 'index.php',
  ),
  'defaults' => array(
    'controller' => 'main',
    'method' => 'index'
  ),
  'routes' => array(),
  'database' => array(
    'host' => 'localhost',
    'username' => '',
    'password' => '',
    'database' => 'mvcframework',
    'port' => '27017'
  )
);

$GLOBALS['instances'] = array();

require_once $GLOBALS['config']['path']['core']. 'autoload.php';
new router();
?>
