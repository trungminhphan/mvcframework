<?php
class model{
  public $model;
  function __construct(){
    $this->model = new databases(
      $GLOBALS['config']['databse']['host'],
      $GLOBALS['config']['databse']['username'],
      $GLOBALS['config']['databse']['password'],
      $GLOBALS['config']['databse']['port'],
      $GLOBALS['config']['databse']['database']
    );
  }
}
?>
