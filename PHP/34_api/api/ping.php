<?php

require '../config.php';

class Ping
{
  private $conn;

  public function __construct()
  {
    $this->conn = new Config();
  }
}
