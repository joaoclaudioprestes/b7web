<?php
try {
  $pdo = new PDO("mysql:host=localhost;dbname=teste", "root", "");
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "SELECT * FROM usuarios";
  $stmt = $pdo->query($sql);
  $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

  echo "<pre>";
  print_r($data);
  echo "</pre>";
} catch (PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}