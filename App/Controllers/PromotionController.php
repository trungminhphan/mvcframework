<?php

namespace App\Controllers;

use \Core\View;
use \Core\Router;
use \App\Config;
use \App\Controllers\ObjectController;
/**
 * Home controller
 *
 * PHP version 7.0
 */
class PromotionController extends \Core\Controller {
    /**
     * Show the index page
     *
     * @return void
     */
    public function indexAction(){
        View::renderTemplate('Backend/Promotion/list.html.twig');
    }

    /*public function addAction(){
        View::renderTemplate('Backend/Currency/add.html.twig');
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
    }*/


}
