<?php

namespace App\Controllers;

use \Core\View;
use \App\Models\User;
use \Core\Router;
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
    	$users = new User();
        $list = $users->getAll();
    	View::renderTemplate('Backend/users.html.twig', ['users' => $list]);
    }

    public function getLoginAction(){
        View::renderTemplate('Backend/login.html.twig');
    }

    public function authAction(){
        $users = new User();
        $username = isset($_POST['username']) ? $_POST['username'] : '';
        $password = isset($_POST['password']) ? $_POST['password'] : '';
        $query = array(
            'username' => $username,
            'password' => md5($password),
            'status' => 1);
        $user = $users->getOneCondition($query);
        if (empty($user)){
            View::renderTemplate('Backend/login.html.twig', ['msg' => 'Đăng nhập thất bại', "username" => $username]);
        } else {
            $router = new Router();
            $_SESSION['user_id'] = (string) $user['_id'];
            $_SESSION['roles'] = $user['roles'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['fullname'] = $user['fullname'];
            $router->redirect('/admin');
        }
    }

    public function logoutAction(){
        $users = new User(); $router = new Router();
        $users->logout();
        $router->redirect('/admin/login');
    }
}
