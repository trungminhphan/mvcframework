<?php

namespace App\Controllers;

use \Core\View;
use \Core\Router;
use \App\Models\User;
use \App\Config;
use \App\Controllers\ObjectController;
/**
 * Home controller
 *
 * PHP version 7.0
 */
class UserController extends \Core\Controller {

    /**
     * Show the index page
     *
     * @return void
     */
    public function indexAction() {
        ObjectController::checkPermis(array('Admin'));
    	$db = new User();
        $list = $db->getAll();
    	View::renderTemplate('Backend/Users/list.html.twig', ['users' => $list]);
    }

    public function addAction(){
        View::renderTemplate('Backend/Users/add.html.twig', ['roles' => Config::ARR_ROLES]);
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
        $_POST['password'] = md5($_POST['password']);
        $_POST['createAt'] = ObjectController::setDate();
        $_POST['updateAt'] = ObjectController::setDate();

        if($db->check_exists()){
            View::renderTemplate('Backend/Users/add.html.twig', ['roles' => Config::ARR_ROLES, 'user' => $_POST, 'msg' => 'Tài khoản đã tồn tại']);
        } else if($db->insertQuery($_POST)){
            $router->redirect('/tai-khoan');
        }
        //View::renderTemplate('Backend/Users/add.html.twig', ['roles' => Config::ARR_ROLES]);
    }

    public function editAction(){
        $router = new Router();$db = new User();
        $id = isset($_GET['id']) ? $_GET['id'] : '';
        $db->id = $id; $user = $db->getOne();
        View::renderTemplate('Backend/Users/edit.html.twig', ['roles' => Config::ARR_ROLES, 'user' => $user]);
    }

    public function updateAction(){
        $router = new Router();$db = new User();
        $id = isset($_POST['id']) ? $_POST['id'] : '';
        $condition = array('_id' => ObjectController::ObjectId($id));
        $_POST['password'] = md5($_POST['password']);
        if($_POST['status']) {
            $_POST['status'] = intval($_POST['status']);
        } else {
            $_POST['status'] = 0;
        }
        if(!isset($_POST['hinhanh_aliasname'])){
            $_POST['hinhanh_aliasname'] = [];
            $_POST['hinhanh_filename'] = [];
        }
        $_POST['updateAt'] = ObjectController::setDate();
        $query = array('$set' => $_POST);
        if($db->editQuery($condition, $query)){
            $router->redirect('/tai-khoan');
        } else {
            View::renderTemplate('Backend/Users/edit.html.twig', ['roles' => Config::ARR_ROLES, 'user' => $_POST, 'msg' => 'Không thể cập nhật']);
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
            $router->redirect('/tai-khoan');
        }
    }

    public function getLoginAction(){
        View::renderTemplate('Backend/login.html.twig');
    }

    public function authAction(){
        $db = new User();$router = new Router();
        $username = isset($_POST['username']) ? $_POST['username'] : '';
        $password = isset($_POST['password']) ? $_POST['password'] : '';
        $query = array(
            'username' => $username,
            'password' => md5($password),
            'status' => 1);
        $user = $db->getOneCondition($query);
        if(empty($user)){
            View::renderTemplate('Backend/login.html.twig', ['msg' => 'Đăng nhập thất bại, vui lòng kiểm tra tài khoản và mật khẩu', "username" => $username]);
            //$router->redirect('/admin/login');
        } else {
            $_SESSION['user_id'] = (string) $user['_id'];
            $_SESSION['roles'] = (array) $user['roles'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['fullname'] = $user['fullname'];
            $router->redirect('/admin');
        }
    }

    public function logoutAction(){
        $db = new User(); $router = new Router();
        $db->logout();
        $router->redirect('/admin/login');
    }
}
