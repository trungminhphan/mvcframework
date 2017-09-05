<?php 
class admins{
	private $_collection;
	private $_mongo;
	function __construct(){
		$this->_mongo = database::init();
		$this->_collection = $this->_mongo->getCollection('admins');
	}

	function auth($username, $password){
		$query = array('username' => $username, 'password' => $password);
		$result = $this->_collection->findOne($query);
		if($result){
			return $result;
		} else {
			return false;
		}
	}
}
?>