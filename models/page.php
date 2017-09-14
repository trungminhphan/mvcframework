<?php
class Page extends Model{

	public function __construct(){
		parent::__construct('admins');
	}

	public function get_all_list(){
   	return $this->collection->find();
	}

}
?>
