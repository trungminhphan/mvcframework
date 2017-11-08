<?php
namespace App\Controllers;
use \Core\View;
use \Core\Router;
use \App\Models\User;
use \App\Models\Attribute;
use \App\Models\Product;
use \App\Models\Order;
use \App\Config;
/**
 * Home controller
 *
 * PHP version 7.0
 */
class ObjectController extends \Core\Controller {
    /**
     * Show the index page
     *
     * @return void
     */
    public static function setDate(){
        $tz = new \DateTimeZone('Asia/Ho_Chi_minh'); //Change your timezone
        $date = date("Y-m-d h:i:sa");
        $a = new \MongoDB\BSON\UTCDateTime(strtotime($date)*1000);
        return $a;
    }

    public static function getDate($date, $format){
        $tz = new \DateTimeZone('Asia/Ho_Chi_minh'); //Change your timezone
        //$date = date("Y-m-d h:i:sa");
        $a = new \MongoDB\BSON\UTCDateTime($date);
        $datetime = $a->toDateTime();
        $datetime->setTimezone($tz);
        $time=$datetime->format($format);
        return $time;
    }

    public static function ObjectId($id){
        return new \MongoDB\BSON\ObjectId($id);
    }

    public static function Id(){
      return new \MongoDB\BSON\ObjectId();
    }

    public static function checkAuth(){
        $router = new Router(); $users = new User();
        if(!$users->checkAuth()){
            $router->redirect('/admin/login');
            return false;
        } else {
            return true;
        }
    }

    public static function checkPermis($permis){
        $router = new Router();
        if(ObjectController::checkAuth()) {
          foreach($permis as $key => $value){
            if(in_array($value, $_SESSION['roles'])){
                return true;
            }
          }
          $router->redirect('/admin/forbidden');
        }  else {
            $router->redirect('/admin/login');
        }
    }

    public function getAttributesAction(){
        $attribute = new Attribute();
        $attributes = $attribute->getAll();
        View::renderTemplate('Backend/Get/attributes.html.twig', ['attributes' => $attributes]);
    }

    public function getAttributeListAction(){
      $attribute = new Attribute();
      $id_product = isset($_GET['id_product']) ? $_GET['id_product'] : '';
      $product = new Product(); $product->id = $id_product; $p = $product->getOne();
      if($p['thuoctinh']){
        foreach($p['thuoctinh'] as $key => $value){
          $attribute->id = $value['id_attribute']; $a = $attribute->getOne();
            $p['thuoctinh'][$key]['tenthuoctinh'] = $a['ten'];
        }
      }
      View::renderTemplate('Backend/Get/attribute_list.html.twig', ['product' => $p]);
    }

    public function getProductAddAction(){
      $attribute = new Attribute();
      $id_product = isset($_GET['id_product']) ? $_GET['id_product'] : '';
      $id_attribute = isset($_GET['id_attribute']) ? $_GET['id_attribute'] : '';
      $soluong = isset($_GET['soluong']) ? $_GET['soluong'] : 1;
      $product = new Product(); $product->id = $id_product; $p = $product->getOne();
      $k = 0;
      if($p['thuoctinh']){
        foreach($p['thuoctinh'] as $key => $value){
          if(strval($value['_id']) == $id_attribute){
            $attribute->id = $value['id_attribute']; $a = $attribute->getOne();
            $p['thuoctinh'][$key]['tenthuoctinh'] = $a['ten']; $k = $key;
          }
        }
      }
      View::renderTemplate('Backend/Get/product_add.html.twig', ['product' => $p, 'soluong' => $soluong, 'k' => $k]);
    }

    public function getStatusAdd(){
      $id = isset($_GET['id']) ? $_GET['id'] : '';
      $id_sanpham = isset($_GET['id_sanpham']) ? $_GET['id_sanpham'] : '';
      $_id = ObjectController::Id();
      $noidung = isset($_GET['noidung']) ? $_GET['noidung'] : '';
      $id_tinhtrang = isset($_GET['id_tinhtrang']) ? $_GET['id_tinhtrang'] : 0;
      $createAt = ObjectController::setDate();
      $arr_tinhtrang = array(
        '_id' => $_id, 'id_tinhtrang' => intval($id_tinhtrang),
        'noidung' => $noidung, 'id_user' => User::UserId(),'createAt' => $createAt
      );
      $order = new Order();
      $order->id = $id;
      $order->tinhtrang = $arr_tinhtrang;
      $order->push_tinhtrang($id_sanpham);

      if(!$noidung){ echo 'NO'; } else {
        if($id_tinhtrang == 0){
          $label = 'label-warning';
        } else if($id_tinhtrang == 1){
          $label = 'label-info';
        } else if($id_tinhtrang == 2) {
          $label = 'label-success';
        } else {
          $label = 'label-danger';
        }

      //  View::renderTemplate('Backend/Get/status_add.html.twig', ['_id' => $_id, 'noidung' => $]);
        echo '<li><i class="ti-alarm-clock"></i> '.date("d/m/Y H:i").' <span class="label '.$label.' font-weight-100">'.Config::ARR_STATUS[$id_tinhtrang].'</span> '.$noidung.' <a href="#" onclick="return false;" class="delete_tinhtrang"><i class="mdi mdi-delete"></i></a></li>';
      }
    }
}
