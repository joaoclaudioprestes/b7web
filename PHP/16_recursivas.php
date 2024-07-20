<?php
function dividir($numero)
{
  $metade = $numero / 2;
  if (round($metade) > 0) {
    echo $metade . "<br>";
    dividir($metade);
  }

  if (round($metade) < 0.7) {
    echo "Fim da divisão" . "<br>";
  }
}

dividir(50000);
