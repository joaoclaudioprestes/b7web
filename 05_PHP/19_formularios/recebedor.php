<?php
$alert = "";
$name = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if ($name && $email) {
  echo "Nome: $name <br>";
  echo "Email: $email <br>";
} else {
  header("Location: form.php?");
  exit;
}
