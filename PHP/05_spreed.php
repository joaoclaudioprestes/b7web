<?php
$bolo = [
  "ovo",
  "farinha",
  "leite",
  "fermento",
  "açúcar"
];


$bolo2 = [...$bolo, "chocolate"]; // Spreed operator

$i = 0;

while ($i < count($bolo2)) {
  echo "- " . $bolo2[$i] . "<br>";
  $i++;
}
