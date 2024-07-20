<?php
$nome = "John";

$nomeCompleto .= $nome ?? "Visitante";

echo $nomeCompleto;

$nomeCompleto .= $sobrenome ?? " Doe";

$nomeCompleto .= isset($sobrenome) ? $sobrenome : " Doe";
