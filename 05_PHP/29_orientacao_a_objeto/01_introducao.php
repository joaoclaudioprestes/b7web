<?php
class Produto
{
  public $descricao;
  public $estoque;
  public $preco;
  private $produto_finalizado = [];

  public function __construct($descricao, $estoque, $preco)
  {
    echo "Construindo um objeto<br>";
    echo "Produto contruido!<br>";
    $this->produto_finalizado = [
      'descricao' => $descricao,
      'estoque' => $estoque,
      'preco' => $preco
    ];
  }

  public function setBaixarEstoque($number = 1)
  {
    if ($number != 0) {
      $this->produto_finalizado['estoque'] -= $number;
    } else {
      $this->produto_finalizado['estoque'] = $this->produto_finalizado['estoque'] - 1;
    }
  }

  public function getProduto()
  {
    return "<br> Descrição: " . $this->produto_finalizado['descricao'] . "<br>Estoque: " . $this->produto_finalizado['estoque'] . "<br>Preço: " . $this->produto_finalizado['preco'];
  }
}

$produto = new Produto('Cerveja', 10, 5);
$produto->setBaixarEstoque();
echo $produto->getProduto();

$produto->setBaixarEstoque(4);
echo $produto->getProduto();
