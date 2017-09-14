<?php
class Message extends Model{

  public function __construct(){
    parent::__construct('message');
  }
  public function save($data, $id = null){
    if(!isset($data['name']) || !isset($data['email']) || !isset($data['message'])){
      return false;
    }

   if(!$id){

   } else {

   }
  }
}
?>
