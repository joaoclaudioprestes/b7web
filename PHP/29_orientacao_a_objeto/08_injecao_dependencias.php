<?php
class Basico1
{
  public function somar($numero1, $numero2)
  {
    return $numero1 + $numero2;
  }
}

class Basico2
{
  public function somar($numero1, $numero2)
  {
    $res = $numero1;
    for ($i = 0; $i < $numero2; $i++) {
      $res++;
    }
    return $res;
  }
}

class Matematica
{
  private $basico;

  public function __construct($injecao)
  {
    $this->basico = $injecao;
  }
  public function somar($numero1, $numero2)
  {
    return $this->basico->somar($numero1, $numero2);
  }
}

$mat = new Matematica(new Basico1());
echo $mat->somar(10, 20);


interface DatabaseInterface
{
  public function listar();
}


class Database
{
  private $engine;

  public function __construct(DatabaseInterface $engine)
  {
    $this->engine = $engine;
  }

  public function listar()
  {
    return $this->engine->listar();
  }
}
