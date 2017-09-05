<?php
class database {
  //const HOST = 'localhost';
  //const PORT = 27017;
  //const DBNAME = 'mvcframework';
  //const USERNAME = 'root';
  //const PASSWORD = 'root';
  public $database;
  private static $instance;
  public $connection;
    private function __construct($host, $username='', $password='', $port, $database){
    if($username == '' && $password == ''){
      $connectionString = sprintf('mongodb://%s:%d', $host, $port);
    } else {
      $connectionString = sprintf('mongodb://%s:%s@%s:%d',$username, $password, $host, $port);
    }
    try {
      $this->connection = new MongoClient($connectionString);
      $this->database = $this->connection->selectDB($database);
    } catch (MongoConnectionException $e) { throw $e; }
  }
  static public function init() {
    if (!isset(self::$instance)) {
      $class = __CLASS__;
      self::$instance = new $class;
    }
    return self::$instance;
  }

  public function getCollection($name) {
    return $this->database->selectCollection($name);
  }
}
?>
