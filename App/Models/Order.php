<?php

namespace App\Models;
use \Core\Model;
use \App\Controllers\ObjectController;
/**
 * Example user model
 *
 * PHP version 7.0
 */
class Order extends \Core\Model {
    private $db;
    private $_collection;

    public $id = '';
    public $madonhang = '';
    public $khachhang = array(); //array('hoten, sodienthoai, email, diachi')
    public $donhang  = array(); //array(_id, id_sanpham, id_thuoctinh, tensanpham, thuoctinh, dongia, soluong, id_seller, createAt, tinhtrang) //tinhtrang = array('id_tinhtrang', noidung, id_user, createAt)
    public $id_delivery = '';
    public $id_user = '';
    public $createAt = '';
    public $updateAt = '';

    public function __construct(){
        $this->db = static::getDB();
        $this->_collection = $this->db->orders;
    }

    public function getAll(){
        return $this->_collection->find();
    }

    public function getAllCondition($condition){
        return $this->_collection->find($condition);
    }

    public function insert(){
        $query = array(
            'madonhang' => $this->madohang,
            'khachhang' => $this->khachhang,
            'donhang' => $this->donhang,
            'id_user' => $this->id_user ? ObjectController::ObjectId($this->id_user) : '',
            'id_delivery' => $this->id_delivery ? ObjectController::ObjectId($this->id_delivery): '',
            'createAt' => ObjectController::setDate(),
            'updateAt' => ObjectController::setDate()
        );
        return $this->_collection->insertOne($query);
    }

    public function insertQuery($query){
        return $this->_collection->insertOne($query);
    }

    public function getOne(){
        return $this->_collection->findOne(array('_id' => ObjectController::ObjectId($this->id)));
    }

    public function getOneCondition($condition){
        return $this->_collection->findOne($condition);
    }

    public function edit(){
        $query = array('$set' => array(
            'khachhang' => $this->khachhang,
            'donhang' => $this->donhang,
            'id_user' => $this->id_user ? ObjectController::ObjectId($this->id_user) : '',
            'id_delivery' => $this->id_delivery ? ObjectController::ObjectId($this->id_delivery): '',
            'updateAt' => ObjectController::setDate()
        ));
        $codition = array('_id' => ObjectController::ObjectId($this->id));
        return $this->_collection->updateOne($condition, $query);
    }

    public function editQuery($condition, $query){
        return $this->_collection->updateOne($condition, $query);
    }

    public function delete(){
        return $this->_collection->deleteOne(array('_id' => ObjectController::ObjectId($this->id)));
    }
}
?>
