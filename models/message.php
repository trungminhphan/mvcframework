<?php
class Message extends Model{

  public function __construct(){
    parent::__construct('message');
  }
  public function save($data, $id = null){
    if(!isset($data['name']) || !isset($data['email']) || !isset($data['message'])){
      return false;
    }

    $name = $data['name'];
    $email = $data['email'];
    $message = $data['message'];

   if(!$id){
    $query = array('name' => $name, 'email' => $email, 'message' => $message);
    return $this->collection->insert($query);
   } else {
    $query = array('$set' => array('name' => $name, 'email' => $email, 'message' => $message));
    $condition = array('_id' => new MongoId($id));
    return $this->collection->update($condition, $query);
   }
  }
}
?>
