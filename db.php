<?php

class Db
{

  private $dbServername;
  private $dbUsername;
  private $dbPassword;
  private $dbName;
  private $charset;
  public $pdo;

  public function __construct()
  {
    $this->dbServername = "localhost";
    $this->dbUsername = "root";
    $this->dbPassword = "root";
    $this->dbName = "products";
    $this->charset = "utf8mb4";

    try {
      $dsn = "mysql:host=$this->dbServername;dbname=$this->dbName;charset=$this->charset";
      $pdo = new PDO($dsn, $this->dbUsername, $this->dbPassword);
      $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
      $this->pdo = $pdo;
    } catch (PDOException $e) {
      echo "Connection failed:" . $e->getMessage();
    }
  }
}
