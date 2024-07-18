<?php
session_start();
require 'config.php';

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

if (!empty($id)) {
  $coon->query("DELETE FROM usuarios WHERE id = '$id'");
  $_SESSION['msg'] = "<p style='color: green;'>Usuário - ID: '$id' excluído com sucesso!</p>";
  header("Location: crud.php");
  exit;
} else {
  $_SESSION['msg'] = "<p style='color: red;'>Usuário - ID: '$id  não foi excluído com sucesso!</p>";
  header("Location: crud.php");
  exit;
}
