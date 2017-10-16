<?php

namespace App\Models;
use \Core\Model;
/**
 * Example user model
 *
 * PHP version 7.0
 */
class User extends \Core\Model {
    private $db;
    private $_collection;

    public $id = '';
    public $username = '';
    public $password = '';
    public $roles = 0;
    public $person = '';
    public $hinhanh = '';
    public $logs = '';

    /**
     * Get all the users as an associative array
     *
     * @return array
     */
    public function __construct(){
        $this->db = static::getDB();
        $this->_collection = $this->db->users;
    }

    public function insert(){
        $query = array(
            'username'=> $this->username,
            'password'=>md5($this->password),
            'roles'=>$this->roles,
            'person'=>$this->person,
            'hinhanh' => $this->hinhanh);
        return $this->_collection->insert($query);
    }

    public function edit(){
        $condition = array('_id'=> new MongoId($this->id));
        $query = array('$set' => array(
            'username'=> $this->username,
            'password'=>md5($this->password),
            'roles'=>$this->roles,
            'person'=>$this->person,
            'hinhanh' => $this->hinhanh,
            'id_tieuchuan' => $this->id_tieuchuan));
        return $this->_collection->updateOne($condition, $query);
    }

    public function getAll(){
        return $this->_collection->find();
    }

    public function getOne(){
        $query = array('_id' => new MongoId());
        return $this->_collection->findOne($query);
    }

}
