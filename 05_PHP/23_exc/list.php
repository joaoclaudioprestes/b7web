<?php
session_start();
?>

<head>
  <title>Lista de Nomes</title>
</head>

<body>
  <h1>Lista de Nomes</h1>

  <br>

  <form method="POST" action="index.php">
    <label for="name">
      <input type="text" name="name" placeholder="Digite um nome">
    </label>
    <button type="submit">Adicionar</button>
  </form>

  <br>

  <h2>Nomes:</h2>

  <?php
  $names = $_SESSION['names'] ?? [];
  if ($names) {
    echo "<ul>";
    foreach ($names as $index => $name) {
      echo "<li>" . $name . " </li>";
    }
    echo "</ul>";
  } else {
    echo "<ul>";
    echo "<li>Nenhum nome adicionado</li>";
    echo "</ul>";
  }

  if (isset($_SESSION['error'])) {
    echo "<p>" . $_SESSION['error'] . "</p>";
    unset($_SESSION['error']);
  }
  ?>
</body>