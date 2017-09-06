<?php
class database {
  const HOST = 'localhost';//$GLOBALS['config']['database']['host'];
  const PORT = 27017;//$GLOBALS['config']['database']['port'];
  const DBNAME = 'mvcframework';//$GLOBALS['config']['database']['database'];
  const USERNAME = '';//$GLOBALS['config']['database']['username'];
  const PASSWORD = '';//$GLOBALS['config']['database']['password'];
  private static $instance;
  public $database; public $connection;

  function __construct(){
    if(database::USERNAME == '' && database::PASSWORD == ''){
      $connectionString = sprintf('mongodb://%s:%d', database::HOST, database::PORT);
    } else {
      $connectionString = sprintf('mongodb://%s:%s@%s:%d',DBConnect::USERNAME, DBConnect::PASSWORD, DBConnect::HOST, DBConnect::PORT);
    }
    try {
      $this->connection = new MongoClient($connectionString);
      $this->database = $this->connection->selectDB(database::DBNAME);
    } catch (MongoConnectionException $e) { throw $e; }
  }

  public function __destruct(){
    $this->connection->close();
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
