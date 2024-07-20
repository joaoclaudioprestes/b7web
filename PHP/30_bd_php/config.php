<?php
$host = "localhost";
$dbname = "teste";
$user = "root";
$password = "";

try {
  $coon = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
} catch (PDOException $e) {
  echo "Erro: " . $e->getMessage();
}
