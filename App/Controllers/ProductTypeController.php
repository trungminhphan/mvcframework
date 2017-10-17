<?php

namespace App\Controllers;

use \Core\View;
use \App\Models\ProductType;
use \Core\Router;
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
        $db = new ProductType();
        $list = $db->getAllRoot();
        View::renderTemplate('Backend/ProductType/add.html.twig', ['list' => $list]);
    }

    public function createAction(){
        $db = new ProductType();
        $router = new Router();
        if($db->insertQuery($_POST)){
            $router->redirect('/danh-muc-loai-san-pham');
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
        $condition = array('_id' => new \MongoDB\BSON\ObjectId($id));
        $query = array('$set' => $_POST);
        if($db->editQuery($condition, $query)){
            $router->redirect('/danh-muc-loai-san-pham');
        }
    }

    public function deleteAction(){
        $id = isset($_GET['id']) ? $_GET['id'] : '';
        $db = new ProductType();$router = new Router();
        $db->id = $id;
        if($db->delete()) $router->redirect('/danh-muc-loai-san-pham');
    }

}
