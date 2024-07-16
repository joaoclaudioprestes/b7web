<?php
interface Database
{
  public function listar();
  public function inserir();
  public function atualizar();
  public function deletar();
  public function buscarPorId();
}

class MySQL implements Database
{
  public function listar()
  {
  }

  public function inserir()
  {
  }

  public function atualizar()
  {
  }

  public function deletar()
  {
  }

  public function buscarPorId()
  {
  }
}

