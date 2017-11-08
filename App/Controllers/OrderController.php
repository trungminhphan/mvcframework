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
        $orders = $db->getAll();
        View::renderTemplate('Backend/Order/list.html.twig', ['orders' => $orders]);
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
        $madonhang = strtoupper(uniqid());
        $hoten = isset($_POST['hoten']) ? $_POST['hoten'] : '';
        $dienthoai = isset($_POST['dienthoai']) ? $_POST['dienthoai'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $diachi = isset($_POST['diachi']) ? $_POST['diachi'] : '';

        $tensanpham = isset($_POST['tensanpham']) ? $_POST['tensanpham'] : '';
        $tenthuoctinh = isset($_POST['tenthuoctinh']) ? $_POST['tenthuoctinh'] : '';
        $id_sanpham = isset($_POST['id_sanpham']) ? $_POST['id_sanpham'] : '';
        $id_thuoctinh = isset($_POST['id_thuoctinh']) ? $_POST['id_thuoctinh'] : '';
        $soluong = isset($_POST['soluong']) ? $_POST['soluong'] : '';
        $giaban = isset($_POST['giaban']) ? $_POST['giaban'] : '';
        $thanhtien = isset($_POST['thanhtien']) ? $_POST['thanhtien'] : '';
        $id_seller = isset($_POST['id_seller']) ? $_POST['id_seller'] : '';
        if(count($id_sanpham) > 0 && $id_sanpham){
          $arr_sanpham = array();
          foreach($id_sanpham as $key => $value){
            array_push($arr_sanpham, array(
              '_id' => ObjectController::Id(),
              'id_sanpham' => ObjectController::ObjectId($value),
              'id_thuoctinh' => ObjectController::ObjectId($id_thuoctinh[$key]),
              'tensanpham' => $tensanpham[$key],
              'tenthuoctinh' => $tenthuoctinh[$key],
              'giaban' => $giaban[$key],
              'soluong' => $soluong[$key],
              'thanhtien' => $thanhtien[$key],
              'id_seller' => ObjectController::ObjectId($id_seller[$key]),
              'createAt' => ObjectController::setDate()
            ));
          }
          $db->madonhang = $madonhang;
          $db->hoten = $hoten;
          $db->dienthoai = $dienthoai;
          $db->email = $email;
          $db->diachi = $diachi;
          $db->sanpham = $arr_sanpham;
          if($db->insert()){
            $router->redirect('/don-hang');
          }
        } else {
          $product = new Product();
          if(User::isAdmin()){
             $products = $product->getAll();
          } else {
            $product->id_user = User::UserId();
            $products = $product->getAllToUser();
          }
          View::renderTemplate('Backend/Order/add.html.twig', ['products' => $products, 'hoten' => $hoten, 'dienthoai' => $dienthoai, 'email' => $email, 'diachi' => $diachi, 'msg' => 'Vui lòng chọn sản phẩm']);
        }
    }

    public function printAction(){
      $db = new Order();$product = new Product();
      $id = isset($_GET['id']) ? $_GET['id'] : '';
      $db->id = $id; $order = $db->getOne();
      if($order['sanpham']){
        foreach($order['sanpham'] as $key => $value){
          $product->id = $value['id_sanpham'];$p = $product->getOne();
          $order['sanpham'][$key]['hinhanh'] = $p['hinhanh'];
          if($p['thuoctinh']){
            foreach($p['thuoctinh'] as $tt){
              if($tt['_id'] == $value['id_thuoctinh']){
                $order['sanpham'][$key]['thumb'] = $tt['hinhanh'];
              }
            }
          }
        }
      }
      View::renderTemplate('Backend/Order/print.html.twig', ['order' => $order, 'tinhtrang' => Config::ARR_STATUS]);
    }

    public function detailAction(){
      $db = new Order();$product = new Product();
      $id = isset($_GET['id']) ? $_GET['id'] : '';
      $db->id = $id; $order = $db->getOne();
      if($order['sanpham']){
        foreach($order['sanpham'] as $key => $value){
          $product->id = $value['id_sanpham'];$p = $product->getOne();
          $order['sanpham'][$key]['hinhanh'] = $p['hinhanh'];
          if($p['thuoctinh']){
            foreach($p['thuoctinh'] as $tt){
              if($tt['_id'] == $value['id_thuoctinh']){
                $order['sanpham'][$key]['thumb'] = $tt['hinhanh'];
              }
            }
          }
        }
      }
      View::renderTemplate('Backend/Order/detail.html.twig', ['order' => $order, 'tinhtrang' => Config::ARR_STATUS]);
    }

    public function deleteStatusAction(){
      $db = new order();
      $id = isset($_GET['id']) ? $_GET['id'] : '';
      $key = isset($_GET['key']) ? $_GET['key'] : '';
      $id_tinhtrang = isset($_GET['id_tinhtrang']) ? $_GET['id_tinhtrang'] : '';
      $db->id = $id;
      if($db->pull_tinhtrang($key, $id_tinhtrang)){
        echo 'OK';
      } else { echo 'NO'; }
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
