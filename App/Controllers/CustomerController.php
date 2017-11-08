<?php

namespace App\Controllers;

use \Core\View;
use \Core\Router;
use \Core\Csrf;
use \App\Config;
use \App\Models\User;
use \App\Controllers\ObjectController;
/**
 * Home controller
 *
 * PHP version 7.0
 */
class CustomerController extends \Core\Controller {
    private $csrf;
    public function __construct(){
      ObjectController::checkPermis(array('Admin'));
      $this->csrf = new Csrf();
    }
    /**
     * Show the index page
     *
     * @return void
     */
    public function indexAction(){
      $db = new User();
      $users = $db->getAllCondition(array('roles' => 'Customer'));
      View::renderTemplate('Backend/Customer/list.html.twig', ['customers' => $users]);
    }

    public function addAction(){
        View::renderTemplate('Backend/Customer/add.html.twig', ['roles' => Config::ARR_ROLES] );
    }

    public function createAction(){
        $router = new Router();$db = new User();
        $username = isset($_POST['username']) ? $_POST['username'] : '';
        $db->username = $username;
        if(isset($_POST['status']) && $_POST['status']) {
            $_POST['status'] = intval($_POST['status']);
        } else {
            $_POST['status'] = 0;
        }
        $_POST['roles'] = array('Customer');
        $_POST['password'] = md5($_POST['password']);
        $_POST['createAt'] = ObjectController::setDate();
        $_POST['updateAt'] = ObjectController::setDate();

        if($db->check_exists()){
            View::renderTemplate('Backend/Customer/add.html.twig', ['user' => $_POST, 'msg' => 'Tài khoản đã tồn tại, vui lòng chọn email khác.']);
        } else if($db->insertQuery($_POST)){
            $router->redirect('/khach-hang');
        }
    }

    public function editAction(){
        $router = new Router();$db = new User();
        $id = isset($_GET['id']) ? $_GET['id'] : '';
        $db->id = $id; $user = $db->getOne();
        View::renderTemplate('Backend/Customer/edit.html.twig', ['user' => $user]);
    }

    public function updateAction(){
        $router = new Router();$db = new User();
        $id = isset($_POST['id']) ? $_POST['id'] : '';
        $condition = array('_id' => ObjectController::ObjectId($id));
        $_POST['password'] = md5($_POST['password']);
        if(isset($_POST['status'])) {
            $_POST['status'] = intval($_POST['status']);
        } else {
            $_POST['status'] = 0;
        }
        if(!isset($_POST['hinhanh_aliasname'])){
            $_POST['hinhanh_aliasname'] = [];
            $_POST['hinhanh_filename'] = [];
        }
        $_POST['roles'] = array('Customer');
        $_POST['updateAt'] = ObjectController::setDate();
        $query = array('$set' => $_POST);
        if($db->editQuery($condition, $query)){
            $router->redirect('/khach-hang');
        } else {
            View::renderTemplate('Backend/Users/edit.html.twig', ['user' => $_POST, 'msg' => 'Không thể cập nhật']);
        }
    }

    public function deleteAction(){
        $db = new User();$router = new Router();
        $id = isset($_GET['id']) ? $_GET['id'] : '';
        $db->id = $id; $user = $db->getOne();
        if(isset($user['hinhanh_aliasname']) && $user['hinhanh_aliasname']){
            foreach($user['hinhanh_aliasname'] as $hinhanh){
                $filename = $_SERVER['DOCUMENT_ROOT'].Config::IMAGES_DIR . $hinhanh;
                $filename_thumb = $_SERVER['DOCUMENT_ROOT'].Config::IMAGES_DIR.'thumb_300x200/'.$hinhanh;
                @unlink($filename); @unlink($filename_thumb);
            }
        }

        if($db->delete()){
            $router->redirect('/khach-hang');
        }
    }

}
