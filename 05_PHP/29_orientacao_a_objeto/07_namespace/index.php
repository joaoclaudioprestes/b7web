<?php
require 'classe01.php';
require 'classe02.php';

use Classe01\MinhaClasse as Classe01; // Importa a classe MinhaClasse do namespace Classe01 e a renomeia para Classe01

$classe01 = new Classe01();
$classe02 = new Classe02\MinhaClasse(); // Após a criação do namespace, é necessário informar o namespace da classe que será instanciada
echo $classe01->minhaFuncao();
echo $classe02->minhaFuncao();
