<?php
spl_autoload_register(function($class){
  $cacheFile = $GLOBALS['config']['path']['cache'].'classloc.cache';
  if($GLOBALS['config']['cache_enabled'] && file_exists($cacheFile)){
    $locations = unserialize(file_get_contents($cacheFile));
  } else {
    $locations = array();
  }
  if(isset($locations[$class])){
    $instantiable = $locations[$class]['instantiable'];
    $classFile = $locations[$class]['classFile'];
  } else {
    $corePath = $GLOBALS['config']['path']['core'];
    $appPath = $GLOBALS['config']['path']['app'];
    if(file_exists("{$corePath}abstracts/{$class}.php")){
      $instantiable = false;
      require_once("{$corePath}abstracts/{$class}.php");
    } else if(file_exists("{$corePath}classes/{$class}.php")){
      $instantiable = true;
      require_once("{$corePath}classes/{$class}.php");
    } else if(file_exists("{$corePath}interfaces/{$class}.php")){
      $instantiable = false;
      require_once("{$corePath}interfaces/{$class}.php");
    } else if(file_exists("{$appPath}controllers/{$class}.php")){
      $instantiable = true;
      require_once("{$appPath}controllers/{$class}.php");
    } else if(file_exists("{$appPath}libs/{$class}.php")){
      $instantiable = true;
      require_once("{$appPath}libs/{$class}.php");
    } else if(file_exists("{$appPath}models/{$class}.php")){
      $instantiable = true;
      require_once("{$appPath}models/{$class}.php");
    } else if(file_exists("{$appPath}interfaces/{$class}.php")){
      $instantiable = false;
      require_once("{$appPath}interfaces/{$class}.php");
    } else if(file_exists("{$appPath}abstracts/{$class}.php")){
      $instantiable = false;
      require_once("{$appPath}abstracts/{$class}.php");
    }

    if($GLOBALS['config']['cache_enabled']){
      $locations[$class] = array(
          'instantiable' => $instantiable,
          'classFile' => $classFile
      );
      file_put_contents($cacheFile, serialize($locations));
    }
  }
  require_once($classFile);
  if($instantiable){
    foreach($GLOBALS['instances'] as $instance){
      $instance->$class = new $class();
    }
  }
});
?>
