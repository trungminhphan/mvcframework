<?php
namespace App\Models;
use \Core\Model;
use \App\Controllers\ObjectController;

class Product extends \Core\Model {
  private $db;
  private $_collection;

  public $id = '';
  public $ten = '';
  public $mota = '';
  public $motachitiet = '';
  public $hinhanh = '';
  public $thuoctinh = array();//_id, id_attribute, gia, giaban, soluong, hinhanh, id_user,
  public $id_currency = '';
  public $id_user = '';
  public $createAt = '';
  public $updateAt = '';

  public function __construct(){
      $this->db = static::getDB();
      $this->_collection = $this->db->products;
  }

  public function getAll(){
    return $this->_collection->find();
  }

  public function getAllCondition($condition){
    return $this->_collection->find($condition);
  }

  public function getOne(){
    $query = array('_id' => ObjectController::ObjectId($this->id));
    return $this->_collection->findOne($query);
  }

  public function getOneCondition($condition){
    return $this->_collection->findOne($condition);
  }

  public function insert(){
    $query = array(
      'ten' => $this->ten,
      'mota' => $this->mota,
      'motachitiet' => $this->motachitiet,
      'hinhanh' => $this->hinhanh,
      'thuoctinh' => $this->thuoctinh,
      'id_currency' => $this->id_currency ? ObjectController::ObjectId($this->id_currency) : '',
      'id_user' => ObjectController::ObjectId($this->id_user),
      'createAt' => ObjectController::setDate(),
      'updateAt' => ObjectController::setDate()
    );
    return $this->_collection->insertOne($query);
  }

  public function insertQuey($query){
    return $this->_collection->insertOne($query);
  }

  public function edit(){
    $query = array('$set' => array(
      'ten' => $this->ten,
      'mota' => $this->mota,
      'motachitiet' => $this->motachitiet,
      'hinhanh' => $this->hinhanh,
      'thuoctinh' => $this->thuoctinh,
      'id_currency' => $this->id_currency ? ObjectController::ObjectId($this->id_currency) : '',
      'id_user' => ObjectController::ObjectId($this->id_user),
      'updateAt' => ObjectController::setDate()
    ));
    $condition = array('_id' => ObjectController::ObjectId($this->id));
    return $this->_collection->updateOne($condition, $query);
  }

  public function delete(){
    $query = array('_id' => ObjectController::ObjectId($this->id));
    return $this->_collection->deleteOne($query);
  }

}
?>
