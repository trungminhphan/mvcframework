<?php

namespace App;

/**
 * Application configuration
 *
 * PHP version 7.0
 */
class Config
{

    /**
     * Database host
     * @var string
     */
    const DB_HOST = 'localhost';

    /**
     * Database name
     * @var string
     */
    const DB_NAME = 'mvcframework';

    /**
     * Database user
     * @var string
     */
    const DB_USER = '';

      /**
     * Database port connect
     * @var interger
     */
    const DB_PORT = 27017;
    /**
     * Database password
     * @var string
     */
    const DB_PASSWORD = '';

    /**
     * Show or hide error messages on screen
     * @var boolean
     */

    const ARR_LANGUAGES = array('vi', 'en');
    const DEFAULT_LANGUAGE = 'vi';

    const SHOW_ERRORS = true;
}
