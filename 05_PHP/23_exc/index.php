<?php
session_start();
$names = $_SESSION['names'] ?? [];
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);

if ($name) {
  $names[] = $name;
  $_SESSION['names'] = $names;
  header('Location: ./list.php');
  exit(); 
} else {
  $_SESSION['error'] = 'Nome não pode ser vazio!';
  header('Location: ./list.php');
  exit();
}
