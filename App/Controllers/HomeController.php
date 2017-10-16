<?php

namespace App\Controllers;

use \Core\View;

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

    public function adminAction(){
        View::renderTemplate('Backend/index.html.twig');
    }
}
