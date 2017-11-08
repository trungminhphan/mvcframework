<?php

namespace App\Controllers;

use \Core\View;
use \Core\Router;
use \App\Config;
use \Core\Csrf;
use \App\Models\ProductType;
use \App\Models\ProductGroup;
use \App\Controllers\ObjectController;
/**
 * Home controller
 *
 * PHP version 7.0
 */
class ProductGroupController extends \Core\Controller {
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
    	$db = new ProductGroup();
    	$list = $db->getAll();
        View::renderTemplate('Backend/ProductGroup/list.html.twig', ['list' => $list]);
    }

    public function addAction(){
    	View::renderTemplate('Backend/ProductGroup/add.html.twig');
    }

    public function createAction(){
    	$db = new ProductGroup(); $router = new Router();
        $_POST['createAt'] = ObjectController::setDate();
        $_POST['updateAt'] = ObjectController::setDate();
        if($db->insertQuery($_POST)){
            $router->redirect('/nhom-san-pham');
        }
    }

    public function editAction(){
    	$id = isset($_GET['id']) ? $_GET['id'] : '';
    	$db = new ProductGroup(); $router = new Router();
    	$db->id = $id; $group = $db->getOne();
    	View::renderTemplate('Backend/ProductGroup/edit.html.twig', ['group' => $group]);
    }

    public function updateAction(){
    	$db = new ProductGroup(); $router = new Router();
        $id = $_POST['id'];
        $condition = array('_id' => ObjectController::ObjectId($id));
        if(!isset($_POST['hinhanh_aliasname'])){
            $_POST['hinhanh_aliasname'] = [];
            $_POST['hinhanh_filename'] = [];
        }
        $_POST['updateAt'] = ObjectController::setDate();
        $query = array('$set' => $_POST);
        if($db->editQuery($condition, $query)){
            $router->redirect('/nhom-san-pham');
        }
    }

    public function deleteAction(){
        $id = isset($_GET['id']) ? $_GET['id'] : '';
        $db = new ProductGroup();$router = new Router();
        $db->id = $id;$producer = $db->getOne();
        if(isset($producer['hinhanh_aliasname']) && $producer['hinhanh_aliasname']){
            foreach($producer['hinhanh_aliasname'] as $hinhanh){
                $filename = $_SERVER['DOCUMENT_ROOT'].Config::IMAGES_DIR . $hinhanh;
                $filename_thumb = $_SERVER['DOCUMENT_ROOT'].Config::IMAGES_DIR.'thumb_300x200/'.$hinhanh;
                @unlink($filename); @unlink($filename_thumb);
            }
        }

        if($db->delete()) $router->redirect('/nhom-san-pham');
    }


}
