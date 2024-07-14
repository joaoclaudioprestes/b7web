<?php
// Array Range
$array_range = range("a", "z", 2); // 1,2,3,4,5,6,7,8,9,10

foreach ($array_range as $value) {
  echo $value;
}

echo "<br>";

// Key_exists
$array_key_exists = [
  "name" => "John",
  "age" => 25,
  "city" => "New York"
];

if (key_exists("age", $array_key_exists)) {
  echo "Key exists";
  echo "<br>";
  echo "A idade é: " . $array_key_exists["age"];
} else {
  echo "Key does not exist";
}


echo "<br>";

// Array Keys e Array Values

$keys = array_keys($array_key_exists);

foreach ($keys as $key) {
  echo $key;
  echo "<br>";
}

$values = array_values($array_key_exists);
foreach ($values as $value) {
  echo $value;
  echo "<br>";
}

// Array Slice
$array_slice = [
  "a", "b", "c", "d", "e", "f", "g"
];

$slice = array_slice($array_slice, 1, 5);

print_r($slice);

echo "<br>";

// Array Splice
$array_splice = [
  "a", "b", "c", "d", "e", "f", "g"
];

$splice = array_splice($array_splice, 1, 2, "x");

print_r($splice);

echo "<br>";

// Array Reduce
$array_reduce = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$reduce = array_reduce($array_reduce, function ($acc, $item) {
  return $acc + $item;
});

echo $reduce;

echo "<br>";

// Descontraido
$joao = [
  "nome" => "João",
  "idade" => 19,
  "cidade" => "New York",
  "cor" => "Preto",
  "profissao" => "Desenvolvedor"
];

list("nome" => $nome, "idade" => $idade, "cidade" => $cidade, "cor" => $cor, "profissao" => $profissao) = $joao;

echo "Nome: $nome, Idade: $idade, Cidade: $cidade, Cor: $cor, Profissão: $profissao";
