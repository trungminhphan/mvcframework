<?php
class ContactsController extends Controller{
	public function __construct($data = array()){
		parent::__construct($data);
		$this->model = new Message();
	}
	
  	public function index(){
  		if(isset($_POST) && $_POST){
  			if($this->model->save($_POST)){
  				Session::setFlash("Thanks you!, Your message has successful...");
  			}
  		}
  	}	
}
?>
