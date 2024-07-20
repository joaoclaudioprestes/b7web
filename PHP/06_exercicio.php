<?php
$lista = [
  "nome" => "John",
  "idade" => 30,
  "atributos" => [
    "forca" => 60,
    "agilidade" => 80,
    "destreza" => 50
  ],
  "vida" => 1000,
  "mana" => 928,
  "xp" => 0
];

echo "Nome: " . $lista["nome"] . "Idade:" . $lista['idade'] . "Atributos: " . $lista['atributos']['forca'] . "<br>" . $lista['atributos']['forca'] . "<br>";
