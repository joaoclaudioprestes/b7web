<?php
$texto = "Olá, mundo!";

file_put_contents("arquivo.txt", $texto);
echo "Arquivo criado com sucesso!";
echo "<br><a href='texto.php'>Ver arquivo</a>";
