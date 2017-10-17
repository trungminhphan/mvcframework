<?php

namespace App\Models;
use \Core\Model;
/**
 * Example user model
 *
 * PHP version 7.0
 */
class ProductType extends \Core\Model {
    private $db;
    private $_collection;

    public $id = '';
    public $ten = '';
    public $icon = '';
    public $images = '';
    public $thutu = 0;
    public $id_parent = array();

    public function __construct(){
        $this->db = static::getDB();
        $this->_collection = $this->db->product_type;
    }

    public function getAll(){
        return $this->_collection->find();
    }

    public function getAllCondition($condition){
        return $this->_collection->find($condition);
    }

    public function getAllRoot(){
        $query = array('$or' => array(array('id_parent' => ''), array('id_parent' => array('$exists' => false))));
        return $this->_collection->find($query);
    }

    public function insert(){
        $query = array(
            'ten' => $this->ten,
            'icon' => $this->icon,
            'images' => $this->images,
            'thutu' => intval($this->thutu),
            'id_parent' => $this->id_parent
        );
        return $this->_collection->insertOne($query);
    }

    public function insertQuery($query){
        return $this->_collection->insertOne($query);
    }

    public function getOne(){
        return $this->_collection->findOne(array('_id' => new \MongoDB\BSON\ObjectId($this->id)));
    }

    public function getOneCondition($condition){
        return $this->_collection->findOne($condition);
    }

    public function edit(){
        $query = array('$set' => array(
            'ten' => $this->ten,
            'icon' => $this->icon,
            'images' => $this->images,
            'id_parent' => $this->id_parent
        ));
        $codition = array('_id' => new \MongoDB\BSON\ObjectId($this->id));
        return $this->_collection->updateOne($condition, $query);
    }

    public function editQuery($condition, $query){
        return $this->_collection->updateOne($condition, $query);
    }
    public function delete(){
        return $this->_collection->deleteOne(array('_id' => new \MongoDB\BSON\ObjectId($this->id)));
    }
}
?>
