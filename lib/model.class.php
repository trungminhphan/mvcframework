<?php
class Model {
  protected $db;
  protected $collection;
  public function __construct($collection_name){
    $this->db = App::$db;
    $this->collection = $this->db->getCollection($collection_name);
  }

}
?>
