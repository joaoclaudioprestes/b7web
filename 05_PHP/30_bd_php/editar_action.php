<?php
session_start();
require 'config.php';

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);



if ($id) {
  $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
  $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);

  if ($name && $email) {
    $update = $coon->prepare("UPDATE usuarios SET name = :name, email = :email WHERE id = :id");
    $update->bindParam(':name', $name);
    $update->bindParam(':email', $email);
    $update->bindParam(':id', $id);
    $update->execute();

    $_SESSION["msg"] = "<p style='color: green;'>Usuário atualizado com sucesso!</p>";
    header("Location: crud.php");
    exit;
  } else {
    $_SESSION["msg"] = "<p style='color: red;'>Usuário não foi atualizado com sucesso! Preencha todos os campos... $name <br> $email</p>";
    header("Location: editar.php?id=$id");
    exit;
  }
}
