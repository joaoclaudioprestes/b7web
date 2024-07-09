<?php
session_start();

?>

<h1>Qual seu nome</h1>

<form method="post" action="login.php">
  <input type="text" name="name" id="name">
  <input type="submit" value="Salvar">
</form>

<br>
<br>

<?php
if (isset($_SESSION["alert"])) {
  echo $_SESSION["alert"];
  $_SESSION["alert"] = "";
}
?>