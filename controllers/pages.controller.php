<?php
class PagesController extends Controller{

  public function __construct($data = array()){
    parent::__construct($data);
    $this->model = new Page();
  }

  public function index(){
    $this->data['test_content'] = 'Here will be pages list';
  }

  public function view(){
    $params = App::getRouter()->getParams();
    if(isset($params[0])){
      $alias = strtolower($params[0]);
      $this->data['content'] = "Here will be a page with '{$alias}' alias";
    } else {
      $this->data['content'] = '123';
    }
  }
}
?>
