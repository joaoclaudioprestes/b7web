<?php
session_start();
require "config.php";

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if ($nome && $email) {
  $isExist = $coon->prepare("SELECT * FROM usuarios WHERE email = :email");
  $isExist->bindValue(":email", $email);
  $isExist->execute();

  if ($isExist->rowCount() == 0) {
    $sql = $coon->prepare("INSERT INTO usuarios (name, email) VALUES (:name, :email)");
    $sql->bindValue(":name", $nome);
    $sql->bindValue(":email", $email);
    $sql->execute();

    $_SESSION["msg"] = "<h2 style='color: green;'>Usuário cadastrado com sucesso!</h2>";
    header("Location: crud.php");
    exit;
  } else {
    $_SESSION["msg"] = "<h2 style='color: red;'>Usuário já cadastrado!</h2>";
  }
} else {
  $_SESSION["msg"] = "<h2 style='color: red;'>Preencha todos os campos!</h2>";
}

header("Location: adicionar.php");
exit;
