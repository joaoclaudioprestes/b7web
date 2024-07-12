<?php
$array = [
  "nome" => "João",
  "idade" => 19,
  "cidade" => "New York",
  "cor" => "Preto",
  "profissao" => "Desenvolvedor"
];

?>

<table border="1">
  <?php foreach ($array as $key => $value) : ?>
    <tr>
      <td><?= $key ?></td>
      <td><?= $value ?></td>
    </tr>
  <?php endforeach; ?>
</table>