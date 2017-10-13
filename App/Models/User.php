<?php

namespace App\Models;

/**
 * Example user model
 *
 * PHP version 7.0
 */
class User extends \Core\Model {
    protected $_collect;

    /**
     * Get all the users as an associative array
     *
     * @return array
     */
    public static function getAll(){
        $db = static::getDB();
        return $db->users->find();
    }
}
