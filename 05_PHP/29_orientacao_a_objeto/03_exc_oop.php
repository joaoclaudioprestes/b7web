<?php
class Calculadora
{
  protected $total = 0;

  public function add($n)
  {
    $this->total += $n;
  }

  public function sub($n)
  {
    $this->total -= $n;
  }

  public function multiply($n)
  {
    $this->total *= $n;
  }

  public function divide($n)
  {
    $this->total /= $n;
  }

  public function getTotal()
  {
    return $this->total;
  }

  public function clear()
  {
    $this->total = 0;
  }
}

$calc = new Calculadora();
$calc->add(10);
$calc->add(2);
$calc->multiply(2);
$calc->divide(2);
$calc->sub(5);

echo "Total: R$ " . $calc->getTotal();

$calc->clear();
