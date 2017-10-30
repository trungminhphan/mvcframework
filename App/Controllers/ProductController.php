<?php

namespace App\Controllers;

use \Core\View;
use \Core\Router;
use \App\Config;
use \App\Models\ProductType;
use \App\Models\Producer;
use \App\Models\ProductGroup;
use \App\Controllers\ObjectController;
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
        View::renderTemplate('Backend/Product/list.html.twig');
    }

    public function addAction(){
        $producttype = new ProductType();
        $producer = new Producer();
        $productgroup = new ProductGroup();
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

        View::renderTemplate('Backend/Product/add.html.twig', ['producttype' => $arr_type]);
    }

    public function createAction(){
        $db = new Currency(); $router = new Router();
        $_POST['quydoisang_usd'] = intval($_POST['quydoisang_usd']);
        $_POST['createAt'] = ObjectController::setDate();
        $_POST['updateAt'] = ObjectController::setDate();
        if($db->insertQuery($_POST)){
            $router->redirect('/don-vi-tien-te');
        }
    }

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
    }
}
