<?php
class Calculadora
{
  public static $resultado = 0;
  public function somar($a, $b)
  {
    return $a + $b;
  }

  public static function subtrair($a, $b)
  {
    return $a - $b;
  }
}

$calc = new Calculadora();
echo $calc->somar(2, 2);

$subtrair = Calculadora::subtrair(5, 3); // Dessa forma, não é necessário instanciar a classe para chamar o método = :: (scope resolution operator)

Calculadora::$resultado = $subtrair;
echo Calculadora::$resultado;