<?php

namespace App\Controllers;

use \Core\View;
use \Core\Router;
use \App\Config;
use \App\Models\ProductType;
use \App\Models\Producer;
use \App\Models\ProductGroup;
use \App\Models\Attribute;
use \App\Models\Product;
use \App\Models\Currency;
use \App\Models\User;
use \App\Controllers\ObjectController;
use \App\Controllers\ImagesController;

/**
 * Home controller
 *
 * PHP version 7.0
 */
class ProductController extends \Core\Controller {

    public function __construct(){
        return ObjectController::checkPermis('Admin');
    }
    /**
     * Show the index page
     *
     * @return void
     */
    public function indexAction(){
        $db = new Product();
        $products = $db->getAll();
        View::renderTemplate('Backend/Product/list.html.twig', ['products' => $products]);
    }

    public function addAction(){
        $producttype = new ProductType();$producer = new Producer();
        $productgroup = new ProductGroup();$attribute = new Attribute();
        $attributes = $attribute->getAll();
        $root_list = $producttype->getAllRoot();
        $arr_type = array();
        if($root_list){
            foreach($root_list as $key => $value){
                $arr_type[] = $value;
                $arr_child = array();
                $list_child = $producttype->getAllCondition(array('id_parent' => strval($value['_id'])));
                if($list_child){
                    foreach($list_child as $k => $v){
                        array_push($arr_child, array('id' => $v['_id'], 'ten' => $v['ten']));
                    }
                }
                $arr_type[$key]['childs'] = $arr_child;
            }
        }

        View::renderTemplate('Backend/Product/add.html.twig', ['producttype' => $arr_type, 'attributes' => $attributes]);
    }

    public function createAction(){
        $router = new Router(); $db = new Product();
        $ten = isset($_POST['ten']) ? $_POST['ten'] : '';
        $id_producttype = isset($_POST['id_producttype']) ? $_POST['id_producttype'] : '';
        $mota = isset($_POST['mota']) ? $_POST['mota'] : '';
        $motachitiet = isset($_POST['motachitiet']) ? $_POST['motachitiet'] : '';
        $hinhanh_aliasname = isset($_POST['hinhanh_aliasname']) ? $_POST['hinhanh_aliasname'] : '';
        $hinhanh_filename = isset($_POST['hinhanh_filename']) ? $_POST['hinhanh_filename'] : '';
        $arr_hinhanh = array();
        if($hinhanh_aliasname){
          foreach($hinhanh_aliasname as $key => $value){
            array_push($arr_hinhanh, array('aliasname' => $value, 'filename' => $hinhanh_filename[$key]));
          }
        }
        $arr_thuoctinh = array();
        $id_attribute = isset($_POST['id_attribute']) ? $_POST['id_attribute'] : '';
        $gia = isset($_POST['gia']) ? $_POST['gia'] : '';
        $giaban = isset($_POST['giaban']) ? $_POST['giaban'] : '';
        $soluong = isset($_POST['soluong']) ? $_POST['soluong'] : '';
        $hinhanh_name = isset($_FILES['hinhanh']['name']) ? $_FILES['hinhanh']['name'] : '';
        $hinhanh_tmp = isset($_FILES['hinhanh']['tmp_name']) ? $_FILES['hinhanh']['tmp_name'] : '';

        if($id_attribute){
          foreach($id_attribute as $key => $value){
            $f = explode('.', $hinhanh_name[$key]); $ext = end($f);
            $filename = md5($hinhanh_name[$key]) . '_' . date("YmdHis") . '.' . $ext;
            if(move_uploaded_file($hinhanh_tmp[$key], $_SERVER['DOCUMENT_ROOT'].Config::IMAGES_DIR.$filename)){
              $hinhanh = $filename;
              $file = $_SERVER['DOCUMENT_ROOT'].Config::IMAGES_DIR.$filename;
              $thumb = $_SERVER['DOCUMENT_ROOT'].Config::IMAGES_DIR.'thumb_100x100/'.$filename;
              ImagesController::resizeAction($file, null, 100, 100, true, $thumb, false, false, 100);
            } else { $hinhanh = ''; }
            array_push($arr_thuoctinh, array(
                '_id' => ObjectController::Id(),
                'id_attribute' => ObjectController::ObjectId($value),
                'gia' => $gia[$key],
                'giaban' => $giaban[$key],
                'soluong' => intval($soluong[$key]),
                'hinhanh' => $hinhanh,
                'id_user' => ObjectController::ObjectId(User::UserId()),
                'createAt' => ObjectController::setDate()));
          }
        }
        $status = isset($_POST['status']) ? $_POST['status'] : 0;
        $db->ten = $ten;
        $db->id_producttype = $id_producttype;
        $db->mota = $mota;
        $db->motachitiet = $motachitiet;
        $db->hinhanh = $arr_hinhanh;
        $db->thuoctinh = $arr_thuoctinh;
        $db->status = $status;
        $db->id_user = User::UserId();
        $db->username = User::Username();
        if($db->insert()){
            $router->redirect('/san-pham');
        }

        //var_dump($_FILES);
    }

    public function editAction(){
        $id = isset($_GET['id']) ? $_GET['id'] : '';
        $db = new Product(); $router = new Router();
        $producttype = new ProductType();$attribute = new Attribute();
        $attributes = iterator_to_array($attribute->getAll());
        $root_list = $producttype->getAllRoot();
        $arr_type = array();
        if($root_list){
            foreach($root_list as $key => $value){
                $arr_type[] = $value;
                $arr_child = array();
                $list_child = $producttype->getAllCondition(array('id_parent' => strval($value['_id'])));
                if($list_child){
                    foreach($list_child as $k => $v){
                        array_push($arr_child, array('id' => $v['_id'], 'ten' => $v['ten']));
                    }
                }
                $arr_type[$key]['childs'] = $arr_child;
            }
        }
        $db->id = $id; $product = $db->getOne();
        View::renderTemplate('Backend/Product/edit.html.twig', ['product' => $product, 'producttype' => $arr_type, 'attributes' => $attributes]);
    }

    public function updateAction(){
      $router = new Router(); $db = new Product();
      $id = isset($_POST['id']) ? $_POST['id'] : '';
      $ten = isset($_POST['ten']) ? $_POST['ten'] : '';
      $id_producttype = isset($_POST['id_producttype']) ? $_POST['id_producttype'] : '';
      $mota = isset($_POST['mota']) ? $_POST['mota'] : '';
      $motachitiet = isset($_POST['motachitiet']) ? $_POST['motachitiet'] : '';
      $hinhanh_aliasname = isset($_POST['hinhanh_aliasname']) ? $_POST['hinhanh_aliasname'] : '';
      $hinhanh_filename = isset($_POST['hinhanh_filename']) ? $_POST['hinhanh_filename'] : '';
      $arr_hinhanh = array();
      if($hinhanh_aliasname){
        foreach($hinhanh_aliasname as $key => $value){
          array_push($arr_hinhanh, array('aliasname' => $value, 'filename' => $hinhanh_filename[$key]));
        }
      }
      $arr_thuoctinh = array();
      $id_attribute = isset($_POST['id_attribute']) ? $_POST['id_attribute'] : '';
      $gia = isset($_POST['gia']) ? $_POST['gia'] : '';
      $giaban = isset($_POST['giaban']) ? $_POST['giaban'] : '';
      $soluong = isset($_POST['soluong']) ? $_POST['soluong'] : '';
      $hinhanh_name = isset($_FILES['hinhanh']['name']) ? $_FILES['hinhanh']['name'] : '';
      $hinhanh_tmp = isset($_FILES['hinhanh']['tmp_name']) ? $_FILES['hinhanh']['tmp_name'] : '';

      if($id_attribute){
        foreach($id_attribute as $key => $value){
          $f = explode('.', $hinhanh_name[$key]); $ext = end($f);
          $filename = md5($hinhanh_name[$key]) . '_' . date("YmdHis") . '.' . $ext;
          if(move_uploaded_file($hinhanh_tmp[$key], $_SERVER['DOCUMENT_ROOT'].Config::IMAGES_DIR.$filename)){
            $hinhanh = $filename;
            $file = $_SERVER['DOCUMENT_ROOT'].Config::IMAGES_DIR.$filename;
            $thumb = $_SERVER['DOCUMENT_ROOT'].Config::IMAGES_DIR.'thumb_100x100/'.$filename;
            ImagesController::resizeAction($file, null, 100, 100, true, $thumb, false, false, 100);
          } else { $hinhanh = ''; }
          array_push($arr_thuoctinh, array(
              '_id' => ObjectController::Id(),
              'id_attribute' => ObjectController::ObjectId($value),
              'gia' => $gia[$key],
              'giaban' => $giaban[$key],
              'soluong' => intval($soluong[$key]),
              'hinhanh' => $hinhanh,
              'id_user' => ObjectController::ObjectId(User::UserId()),
              'createAt' => ObjectController::setDate()));
        }
      }
      $status = isset($_POST['status']) ? $_POST['status'] : 0;
      $db->id = $id;
      $db->ten = $ten;
      $db->id_producttype = $id_producttype;
      $db->mota = $mota;
      $db->motachitiet = $motachitiet;
      $db->hinhanh = $arr_hinhanh;
      $db->thuoctinh = $arr_thuoctinh;
      $db->status = $status;
      $db->id_user = User::UserId();
      $db->username = User::Username();
      if($db->edit()){
          $router->redirect('/san-pham');
      }
    }
    public function deleteAction(){
        $id = isset($_GET['id']) ? $_GET['id'] : '';
        $db = new Currency();$router = new Router();
        $db->id = $id;
        if($db->delete()) $router->redirect('/don-vi-tien-te');
    }

}
