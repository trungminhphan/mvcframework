<?php

namespace App\Models;
use \Core\Model;
use \App\Controllers\ObjectController;
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
    public $fullname = '';
    public $status = 0;
    public $image = '';
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
            'fullname'=>$this->fullname,
            'status'=>intval($this->status),
            'image' => $this->image);
        return $this->_collection->insertOne($query);
    }

    public function insertQuery($query){
        return $this->_collection->insertOne($query);
    }

    public function edit(){
        $condition = array('_id'=> new MongoId($this->id));
        $query = array('$set' => array(
            'username'=> $this->username,
            'password'=>md5($this->password),
            'roles'=>$this->roles,
            'fullname'=>$this->fullname,
            'status'=>intval($this->status),
            'image' => $this->image));
        return $this->_collection->updateOne($condition, $query);
    }

    public function editQuery($condition, $query){
        return $this->_collection->updateOne($condition, $query);
    }

    public function getAll(){
        return $this->_collection->find();
    }

    public function getOne(){
        $query = array('_id' => ObjectController::ObjectId($this->id));
        return $this->_collection->findOne($query);
    }

    public function getOneCondition($condition){
        return $this->_collection->findOne($condition);
    }

    public function get_user_id(){
        return $_SESSION['user_id'];
    }

    public static function UserId(){
      return $_SESSION['user_id'];
    }

    public static function Username(){
      return $_SESSION['username'];
    }
    public function logout(){
        unset($_SESSION['user_id']);unset($_SESSION['roles']);unset($_SESSION['username']);unset($_SESSION['fullname']);
        //session_destroy();
    }

    public function checkAuth() {
        return isset($_SESSION['user_id']);
    }

    public function check_exists(){
        $query = array('username' => $this->username);
        $result = $this->_collection->findOne($query);
        if(isset($result['_id']) && $result['_id']) return true;
        else return false;
    }

    public function delete(){
        return $this->_collection->deleteOne(array('_id' => ObjectController::ObjectId($this->id)));
    }


}
