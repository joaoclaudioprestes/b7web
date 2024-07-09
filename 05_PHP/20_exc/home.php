<?php
session_start();

if (isset($_SESSION["name"])) {
  echo "<h1>Olá, " . $_SESSION["name"] . "!</h1> <a href='logout.php'>Sair</a>";
}
