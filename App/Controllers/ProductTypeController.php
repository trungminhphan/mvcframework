<?php

namespace App\Controllers;

use \Core\View;
use \Core\Router;
use \App\Config;
use \App\Models\ProductType;
use \App\Controllers\ObjectController;

/**
 * Home controller
 *
 * PHP version 7.0
 */
class ProductTypeController extends \Core\Controller {
    /**
     * Show the index page
     *
     * @return void
     */
    public function __construct(){
        ObjectController::checkPermis('Admin');
    }
    public function indexAction(){
        $db = new ProductType();
        $arr_list = array();
        $list = $db->getAllRoot();
        if($list){
            foreach ($list as $key => $value) {
                $arr_list[] = $value;
                $arr_child = array();
                $list_child = $db->getAllCondition(array('id_parent' => strval($value['_id'])));
                if($list_child){
                    foreach($list_child as $k => $v){
                        array_push($arr_child, array('id' => $v['_id'], 'ten' => $v['ten']));
                    }
                }
                $arr_list[$key]['childs'] = $arr_child;
            }
        }
        View::renderTemplate('Backend/ProductType/list.html.twig', ['list' => $arr_list]);
    }

    public function addAction(){
        $db = new ProductType();$list = $db->getAllRoot();
        $id_parent = isset($_GET['id_parent']) ? $_GET['id_parent'] : '';
        View::renderTemplate('Backend/ProductType/add.html.twig', ['list' => $list, 'id_parent' => $id_parent]);
    }

    public function createAction(){
        $db = new ProductType();
        $router = new Router();
        $_POST['createAt'] = ObjectController::setDate();
        $_POST['updateAt'] = ObjectController::setDate();
        if($db->insertQuery($_POST)){
            $router->redirect('/loai-san-pham');
        }
        //View::renderTemplate('Backend/ProductType/add.html.twig');
    }

    public function editAction(){
        $db = new ProductType();
        $list = $db->getAllRoot();
        $id = isset($_GET['id']) ? $_GET['id'] : '';
        $db->id = $id; $product = $db->getOne();
        View::renderTemplate('Backend/ProductType/edit.html.twig', ['product' => $product, 'list' => $list]);
    }

    public function updateAction(){
        $db = new ProductType();
        $router = new Router();
        $id = $_POST['id'];
        $condition = array('_id' => ObjectController::ObjectId($id));
        if(!isset($_POST['hinhanh_aliasname'])){
            $_POST['hinhanh_aliasname'] = [];
            $_POST['hinhanh_filename'] = [];
        }
        $_POST['updateAt'] = ObjectController::setDate();
        $query = array('$set' => $_POST);
        if($db->editQuery($condition, $query)){
            $router->redirect('/loai-san-pham');
        }
    }

    public function deleteAction(){
        $id = isset($_GET['id']) ? $_GET['id'] : '';
        $db = new ProductType();$router = new Router();
        $db->id = $id;$product = $db->getOne();
        if(isset($product['hinhanh_aliasname']) && $product['hinhanh_aliasname']){
            foreach($product['hinhanh_aliasname'] as $hinhanh){
                $filename = $_SERVER['DOCUMENT_ROOT'].Config::IMAGES_DIR . $hinhanh;
                $filename_thumb = $_SERVER['DOCUMENT_ROOT'].Config::IMAGES_DIR.'thumb_300x200/'.$hinhanh;
                @unlink($filename); @unlink($filename_thumb);
            }
        }
        if($db->delete()) $router->redirect('/loai-san-pham');
    }

}
