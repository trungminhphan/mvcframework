<?php
namespace App;
/**
 * Application configuration
 *
 * PHP version 7.0
 */
class Config{

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
    const ARR_ROLES = array('Admin', 'Manager', 'Updater', 'Seller', 'Delivery');
    const SHOW_ERRORS = true;
    const UPLOAD_DIR = '/uploads/';
    const IMAGES_DIR = '/uploads/images/';
    const FILES_DIR = '/uploads/files/';
    const FILE_EXT = array('pdf', 'zip', 'rar', 'doc', 'docx', 'xls', 'png', 'gif', 'jpg', 'jpeg', 'bmp', 'rtf');
    const IMAGES_EXT = array('png', 'gif', 'jpg', 'jpeg', 'bmp');
    const VALID_EXT = array("jpg", "png", "gif", "zip", "bmp", "doc", "docx", "pdf", "xls", "xlsx", "ppt", "pptx", 'zip', 'rar');

    const ARR_STATUS = array(0 => 'Chờ xử lý', 1 => 'Đang giao hàng', 2 => 'Hoàn tất', 3 => 'Hủy');
    const MAX_FILE_SIZE = 50*1024*1024*1024; //50MB
}
