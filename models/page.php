<?php
class Page extends Model{

	public function __construct(){
		parent::__construct('pages');
	}

	public function get_all_list(){
   		return $this->collection->find();
	}

	public function get_one($id){
		return $this->collection->findOne(array('_id' => new MongoId($id)));
	}
}
?>
