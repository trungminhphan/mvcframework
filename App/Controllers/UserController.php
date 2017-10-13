<?php

namespace App\Controllers;

use \Core\View;
use \App\Models\User;
/**
 * Home controller
 *
 * PHP version 7.0
 */
class UserController extends \Core\Controller {

    /**
     * Show the index page
     *
     * @return void
     */
    public function indexAction() {
    	$users = User::getAll();
    	View::renderTemplate('Home/users.html.twig', ['users' => $users]);
    }
}
