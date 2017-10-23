<?php

namespace App\Models;
use \Core\Model;
use \App\Controllers\ObjectController;
/**
 * Example user model
 *
 * PHP version 7.0
 */
class Attribute extends \Core\Model {
    private $db;
    private $_collection;

    public $id = '';
    public $ten = '';
    public $icon = '';
    public $thutu = 0;

    public $createAt = '';
    public $updateAt = '';

    public function __construct(){
        $this->db = static::getDB();
        $this->_collection = $this->db->attributes;
    }

    public function getAll(){
        return $this->_collection->find();
    }

    public function getAllCondition($condition){
        return $this->_collection->find($condition);
    }

    public function insert(){
        $query = array(
            'ten' => $this->ten,
            'icon' => $this->icon,
            'images' => $this->images,
            'thutu' => intval($this->thutu)
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
            'ten' => $this->ten,
            'icon' => $this->icon,
            'images' => $this->images,
            'id_parent' => $this->id_parent
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
