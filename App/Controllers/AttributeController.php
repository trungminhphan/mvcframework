<?php

namespace App\Controllers;

use \Core\View;
use \Core\Router;
use \App\Config;
use \App\Models\Attribute;
use \App\Controllers\ObjectController;
/**
 * Home controller
 *
 * PHP version 7.0
 */
class AttributeController extends \Core\Controller {
    /**
     * Show the index page
     *
     * @return void
     */
    public function indexAction(){
    	$db = new Attribute();
    	$list = $db->getAll();
        View::renderTemplate('Backend/Attribute/list.html.twig', ['list' => $list]);
    }

    public function addAction(){
    	View::renderTemplate('Backend/Attribute/add.html.twig');
    }

    public function createAction(){
    	$db = new Attribute(); $router = new Router();
        $_POST['createAt'] = ObjectController::setDate();
        $_POST['updateAt'] = ObjectController::setDate();
        if($db->insertQuery($_POST)){
            $router->redirect('/thuoc-tinh-san-pham');
        }
    }

    public function editAction(){
    	$id = isset($_GET['id']) ? $_GET['id'] : '';
    	$db = new Attribute(); $router = new Router();
    	$db->id = $id; $attribute = $db->getOne();
    	View::renderTemplate('Backend/Attribute/edit.html.twig', ['attribute' => $attribute]);
    }

    public function updateAction(){
    	$db = new Attribute(); $router = new Router();
        $id = $_POST['id'];
        $condition = array('_id' => ObjectController::ObjectId($id));
        $_POST['updateAt'] = ObjectController::setDate();
        $query = array('$set' => $_POST);
        if($db->editQuery($condition, $query)){
            $router->redirect('/thuoc-tinh-san-pham');
        }
    }

    public function deleteAction(){
        $id = isset($_GET['id']) ? $_GET['id'] : '';
        $db = new Attribute();$router = new Router();
        $db->id = $id;
        if($db->delete()) $router->redirect('/thuoc-tinh-san-pham');
    }


}
