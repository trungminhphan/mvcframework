<?php
class DB{
  protected $connection;
  protected $connectionString;
  protected $database;

  public function __construct($host, $user, $password, $db_name, $port){
    if($user != '' && $password != ''){
      $this->connectionString = sprintf('mongodb://%s:%s@%s:%d',$user, $password, $host, $port);
    } else {
      $this->connectionString = sprintf('mongodb://%s:%d', $host, $port);
    }

    try {
      $this->connection = new MongoDB\Client($this->connectionString);
      $this->database = $this->connection->selectDB($db_name);
    } catch (MongoConnectionException $e) { throw $e; }
  }

  public function getCollection($name) {
    return $this->database->selectCollection($name);
  }

  public function __destruct(){
    $this->connection->close();
  }
}

?>
