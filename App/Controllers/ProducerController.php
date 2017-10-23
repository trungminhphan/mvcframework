<?php

namespace App\Controllers;

use \Core\View;
use \Core\Router;
use \App\Config;
use \App\Models\ProductType;
use \App\Models\Producer;
use \App\Controllers\ObjectController;
/**
 * Home controller
 *
 * PHP version 7.0
 */
class ProducerController extends \Core\Controller {
    /**
     * Show the index page
     *
     * @return void
     */
    public function indexAction(){
    	$db = new Producer();
    	$list = $db->getAll();
        View::renderTemplate('Backend/Producer/list.html.twig', ['list' => $list]);
    }

    public function addAction(){
    	$db = new ProductType();$list = $db->getAllRoot();
    	View::renderTemplate('Backend/Producer/add.html.twig', ['list' => $list]);
    }

    public function createAction(){
    	$db = new Producer(); $router = new Router();
        $_POST['createAt'] = ObjectController::setDate();
        $_POST['updateAt'] = ObjectController::setDate();
        if($db->insertQuery($_POST)){
            $router->redirect('/nha-san-xuat');
        }
    }

    public function editAction(){
    	$id = isset($_GET['id']) ? $_GET['id'] : '';
    	$db = new Producer(); $db1 = new ProductType();
    	$router = new Router();$list = $db1->getAllRoot();
    	$db->id = $id; $prodcuder = $db->getOne();
    	View::renderTemplate('Backend/Producer/edit.html.twig', ['list' => $list, 'producer' => $prodcuder]);
    }

    public function updateAction(){
    	$db = new Producer(); $router = new Router();
        $id = $_POST['id'];
        $condition = array('_id' => ObjectController::ObjectId($id));
        if(!isset($_POST['hinhanh_aliasname'])){
            $_POST['hinhanh_aliasname'] = [];
            $_POST['hinhanh_filename'] = [];
        }
        $_POST['updateAt'] = ObjectController::setDate();
        $query = array('$set' => $_POST);
        if($db->editQuery($condition, $query)){
            $router->redirect('/nha-san-xuat');
        }
    }

    public function deleteAction(){
        $id = isset($_GET['id']) ? $_GET['id'] : '';
        $db = new Producer();$router = new Router();
        $db->id = $id;$producer = $db->getOne();
        if(isset($producer['hinhanh_aliasname']) && $producer['hinhanh_aliasname']){
            foreach($producer['hinhanh_aliasname'] as $hinhanh){
                $filename = $_SERVER['DOCUMENT_ROOT'].Config::IMAGES_DIR . $hinhanh;
                $filename_thumb = $_SERVER['DOCUMENT_ROOT'].Config::IMAGES_DIR.'thumb_300x200/'.$hinhanh;
                @unlink($filename); @unlink($filename_thumb);
            }
        }
        if($db->delete()) $router->redirect('/nha-san-xuat');
    }


}
