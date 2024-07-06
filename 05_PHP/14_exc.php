<?php
$numero = 0;
while ($numero <= 10) {
  $tracos = "";
  for ($i = 0; $i <= 10; $i++) {
    $tracos .= "-";
  }

  echo $tracos . "<br>";

  $numero++;
}
