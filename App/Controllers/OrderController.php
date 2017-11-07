<?php

namespace App\Controllers;

use \Core\View;
use \Core\Router;
use \Core\Csrf;
use \App\Config;
use \App\Models\Order;
use \App\Models\Product;
use \App\Models\User;
use \App\Controllers\ObjectController;
/**
 * Home controller
 *
 * PHP version 7.0
 */
class OrderController extends \Core\Controller {
    private $csrf;

    public function __construct(){
      ObjectController::checkPermis(array('Admin', 'Manager', 'Seller', 'Delivery'));
      $this->csrf = new Csrf();
    }
    public function indexAction(){
        $db = new Order();
        $list = $db->getAll();
        View::renderTemplate('Backend/Order/list.html.twig', ['list' => $list]);
    }

    public function addAction(){
      $product = new Product();
      if(User::isAdmin()){
         $products = $product->getAll();
      } else {
        $product->id_user = User::UserId();
        $products = $product->getAllToUser();
      }
      View::renderTemplate('Backend/Order/add.html.twig', ['products' => $products]);
    }

    public function createAction(){
        $db = new Order(); $router = new Router();

        $_POST['createAt'] = ObjectController::setDate();
        $_POST['updateAt'] = ObjectController::setDate();
        if($db->insert($_POST)){
            $router->redirect('/don-hang');
        }
    }

    public function printAction(){
      View::renderTemplate('Backend/Order/print.html.twig');
    }
    /*
    public function editAction(){
        $id = isset($_GET['id']) ? $_GET['id'] : '';
        $db = new Currency(); $router = new Router();
        $db->id = $id; $currency = $db->getOne();
        View::renderTemplate('Backend/Currency/edit.html.twig', ['currency' => $currency]);
    }

    public function updateAction(){
        $db = new Currency(); $router = new Router();
        $id = $_POST['id'];
        $_POST['quydoisang_usd'] = intval($_POST['quydoisang_usd']);
        $condition = array('_id' => ObjectController::ObjectId($id));
        $_POST['updateAt'] = ObjectController::setDate();
        $query = array('$set' => $_POST);
        if($db->editQuery($condition, $query)){
            $router->redirect('/don-vi-tien-te');
        }
    }
    public function deleteAction(){
        $id = isset($_GET['id']) ? $_GET['id'] : '';
        $db = new Currency();$router = new Router();
        $db->id = $id;
        if($db->delete()) $router->redirect('/don-vi-tien-te');
    }*/


}
