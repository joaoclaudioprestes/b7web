<?php
session_start();
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);

if ($name) {
  $_SESSION["name"] = $name;
  header("Location: home.php");
} else {
  $_SESSION["alert"] = "Preencha o campo corretamente";
  header("Location: index.php");
}
