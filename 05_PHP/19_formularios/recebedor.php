<?php
session_start();

$alert = "";
$name = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if ($name && $email) {
  //nome do cookie, valor do cookie, tempo de vida do cookie;
  setcookie("nome", $name, time() + 300);

  echo "Nome: $name <br>";
  echo "Email: $email <br>";
} else {
  $_SESSION["alert"] = "Preencha os campos corretamente!";
  header("Location: form.php?");
  exit;
}


// Sessões no PHP
// Cookies são armazenados no computador do usuário, enquanto sessões são armazenadas no servidor.
