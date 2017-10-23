<?php
namespace App\Controllers;
use \Core\View;
use \Core\Router;
use \App\Models\User;
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
            if(in_array($permis, $_SESSION['roles'])){
                return true;
            } else {
                $router->redirect('/admin/forbidden');
                //throw new \Exception('Not permission access');
            }
        }  else {
            $router->redirect('/admin/login');
        }

    }
}
