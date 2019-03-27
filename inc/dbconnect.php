<?php

require('config.php');

class Database {
  protected $pdo;
  protected $stmt;

  public function __construct() {
    $dsn = 'mysql:host='.DBHOST.';dbname='.DBNAME.';charset=utf8';
    try{
      $this->pdo = new PDO($dsn, DBUSER, DBPASS, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
      ]);
    }
    catch(PDOException $e) {
      exit('Database error');
    }
  }

  public function query($q) {
    $this->stmt = $this->pdo->prepare($q);
  }

  public function execute() {
    $this->stmt->execute();
  }

  public function show() {
    $this->execute();
    return $this->stmt->fetch();
  }

  public function __destruct() {
    exit();
  }

}

$dbc = new Database;
