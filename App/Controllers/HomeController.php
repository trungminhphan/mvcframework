<?php

namespace App\Controllers;

use \Core\View;
use \App\Controllers\ObjectController;
/**
 * Home controller
 *
 * PHP version 7.0
 */
class HomeController extends \Core\Controller {
    /**
     * Show the index page
     *
     * @return void
     */
    public function indexAction(){
        View::renderTemplate('Frontend/index.html.twig');
    }

    public function forbiddenAction(){
        View::renderTemplate('Backend/pages-error-403.html.twig');
    }

    public function adminAction(){
        ObjectController::checkAuth();
        return View::renderTemplate('Backend/index.html.twig');
    }
}
