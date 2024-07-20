<?php
session_start();

if ($_SESSION["alert"]) {
  echo $_SESSION["alert"];
  $_SESSION["alert"] = "";
}
?>

<h1>Formulário</h1>
<p>Cadastre-se em nossa plataforma!</p>
<form method="POST" action="recebedor.php">
  <label>
    Nome:
    <input type="text" name="nome" id="name">
  </label>
  <br>
  <label>
    Email:
    <input type="email" name="email" id="email">
  </label>
  <br>
  <input type="submit" value="Enviar">
</form>

<a href="deleteCookie.php">Deletar todos os cookies...</a>

<br>
<br>

<?php
if (isset($_COOKIE["nome"])) {
  echo "Olá, " . $_COOKIE["nome"] . "! <br> Você já está cadastrado na plataforma! <br>";
} else {
  echo "Você ainda não se cadastrou!";
}
?>