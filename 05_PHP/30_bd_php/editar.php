<?php
session_start();
require 'config.php';

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

if (!empty($id)) {
  $user = $coon->prepare("SELECT * FROM usuarios WHERE id = :id");
  $user->bindValue(':id', $id);
  $user->execute();

  if ($user->rowCount() == 0) {
    $_SESSION['msg'] = "<p style='color: red;'>Usuário não encontrado!</p>";
    header("Location: crud.php");
    exit;
  }

  $user = $user->fetch();
} else {
  $_SESSION['msg'] = "<p style='color: red;'>Usuário - ID: '$id' não foi excluído com sucesso!</p>";
  header("Location: crud.php");
  exit;
}
?>

<h1>Editar usuário</h1>
<p>Utilize os campos abaixo para atualizar os dados do usuário:</p>
<br>
<form action="editar_action.php?id=<?= $id ?>" method="POST">
  <label for="name">
    Nome: <input type="text" name="name" value="<?= $user["name"] ?>">
  </label>
  <br>
  <br>
  <label for="email">
    Email: <input type="text" name="email" value="<?= $user["email"] ?>">
  </label>
  <br>
  <br>
  <input type="submit" value="Atualizar">
</form>

<br>
<br>

<a href="crud.php">Voltar</a>

<?php
if (isset($_SESSION['msg'])) {
  echo $_SESSION['msg'];
  unset($_SESSION['msg']);
}
?>