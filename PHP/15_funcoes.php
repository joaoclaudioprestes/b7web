<?php
function soma($a, $b)
{
  return $a + $b;
}

echo soma(1, 2); // 3

function subsequente($value)
{
  return $value + 1;
}

echo subsequente(1); // 2

$subtrair = function ($a, $b) {
  return $a - $b;
};

$dizimo = fn ($value) => $value * 0.1;
