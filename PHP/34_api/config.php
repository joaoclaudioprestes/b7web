<?php
class Config
{
  private $host = 'localhost';
  private $db_name = 'api_db';
  private $user = 'root';
  private $password = '';
  public $conn;

  public function __construct()
  {
    $this->conn = null;
    $this->Connection();
  }

  public function Connection()
  {
    try {
      $this->conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db_name, $this->user, $this->password);
      $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
      echo 'Connection Error: ' . $e->getMessage();
    }
    return $this->conn;
  }
}
