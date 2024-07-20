<?php
$idade = 40;

if ($idade < 18) {
  echo "Menor de idade";
} else if ($idade < 60) {
  echo "Adulto";
} else {
  echo "Idoso";
}


$idade < 18 ? "Menor de idade" : "Adulto";
$idade < 60 ? "Adulto" : "Idoso";
