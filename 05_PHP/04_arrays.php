<?php
$igredientes = [
  "ovo",
  "farinha",
  "leite",
  "fermento",
  "açúcar"
];

echo "Para fazer um bolo você precisa de: <br>";
$i = 0;
while ($i < count($igredientes)) {
  echo "- " . $igredientes[$i] . "<br>";
  $i++;
}

echo "----------------------------------------- <br>";

echo "- " . $igredientes[0] . "<br>";
echo "- " . $igredientes[1] . "<br>";
echo "- " . $igredientes[2] . "<br>";
echo "- " . $igredientes[3] . "<br>";
