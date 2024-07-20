<?php
// Polymorphism is the ability of an object to take on many forms. The most common use of polymorphism in OOP occurs when a parent class reference is used to refer to a child class object. Any object that can pass more than one IS-A test is considered to be polymorphic. In PHP, polymorphism is achieved through method overriding.
interface Forma
{
  public function getTipo();
  public function getArea();
}

class Quadro
{
  private $largura;
  private $altura;

  public function __construct($largura, $altura)
  {
    $this->largura = $largura;
    $this->altura = $altura;
  }
  public function getTipo()
  {
    return 'Quadrado';
  }

  public function getArea()
  {
    return $this->largura * $this->altura;
  }
}

class Circulo
{
  private $raio;
  private $pi = 3.14;

  public function __construct($raio)
  {
    $this->raio = $raio;
  }

  public function getTipo()
  {
    return 'Círculo';
  }

  public function getArea()
  {
    return $this->pi * ($this->raio ** 2);
  }
}

$quadrado = new Quadro(5, 5);
$circulo = new Circulo(7);

$objetos = [
  $quadrado,
  $circulo
];

foreach ($objetos as $objeto) {
  $tipo = $objeto->getTipo();
  $area = $objeto->getArea();

  echo "Tipo: $tipo, Área: $area\n";
}
