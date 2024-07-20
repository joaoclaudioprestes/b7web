<?php
session_start();
require 'config.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD</title>
</head>

<body>
  <a href="adicionar.php">ADICIONAR USUÁRIO</a>
  <span>|</span>
  <?php
  if (isset($_SESSION['msg'])) {
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
  }
  ?>

  <hr>
  <table border="1" width="100%">
    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>Email</th>
      <th>Ações</th>

      <?php
      $isExist = $coon->query("SELECT * FROM usuarios");

      if ($isExist->rowCount() > 0) {
        foreach ($isExist->fetchAll() as $usuario) {
          echo "<tr>";
          echo "<td>" . $usuario['id'] . "</td>";
          echo "<td>" . $usuario['name'] . "</td>";
          echo "<td>" . $usuario['email'] . "</td>";
          echo "<td>";
          echo "<a href='editar.php?id=" . $usuario['id'] . "'>Editar</a>";
          echo " | ";
          echo "<a href='excluir.php?id=" . $usuario['id'] . "'>Excluir</a>";
          echo "</td>";
          echo "</tr>";
        }
      }
      ?>
    </tr>
  </table>
</body>

</html>