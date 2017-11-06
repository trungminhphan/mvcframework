<?php

namespace App\Controllers;

use \Core\View;
use \Core\Router;
use \Core\Csrf;
use \App\Config;
use \App\Models\Currency;
use \App\Controllers\ObjectController;
/**
 * Home controller
 *
 * PHP version 7.0
 */
class CurrencyController extends \Core\Controller {
  private $_csrf;
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
    	$db = new Currency();
    	$list = $db->getAll();
        View::renderTemplate('Backend/Currency/list.html.twig', ['list' => $list]);
    }

    public function addAction(){
    	View::renderTemplate('Backend/Currency/add.html.twig');
    }

    public function createAction(){
      $this->csrf->verifyRequest();
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
      $this->csrf->verifyRequest();
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
      $this->csrf->verifyRequest();
        $id = isset($_GET['id']) ? $_GET['id'] : '';
        $db = new Currency();$router = new Router();
        $db->id = $id;
        if($db->delete()) $router->redirect('/don-vi-tien-te');
    }


}
