<?php
session_start();
?>

<h1>Adicione um novo usuário!</h1>
<p>Utilize os campos abaixo:</p>
<br>
<form action="adicionar_action.php" method="POST">
  <label for="name">
    <input type="text" name="nome" placeholder="José">
  </label>
  <br>
  <br>
  <label for="email">
    <input type="text" name="email" placeholder="jose@gmail.com">
  </label>
  <br>
  <br>
  <input type="submit" value="Adicionar">
</form>

<br>
<br>


<?php
if (isset($_SESSION['msg'])) {
  echo $_SESSION['msg'];
  unset($_SESSION['msg']);
}
?>


<a href="crud.php">Voltar</a>