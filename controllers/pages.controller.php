<?php
class PagesController extends Controller{

  public function __construct($data = array()){
    parent::__construct($data);
    $this->model = new Page();
  }

  public function index(){
    $this->data['pages'] = $this->model->get_all_list();
  }

  public function view(){
    $params = App::getRouter()->getParams();
    if(isset($params[0])){
      $alias = strtolower($params[0]);
      $this->data['page'] = $this->model->get_one($alias);
    } else {
      $this->data['page'] = '123';
    }
  }

  public function admin_index(){
    $this->data['page'] = $this->model->get_all_list();
  }
}
?>
