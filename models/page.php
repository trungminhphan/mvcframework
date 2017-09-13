<?php
class Page extends Model{
  private $collection;

  public function __construct(){
    $this->collection = $this->db->getCollection('admins');
  }

  public function get_all_list(){
    return $this->collection->find();
  }
}
?>
