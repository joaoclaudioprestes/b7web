<?php
class Post
{
  private int $id;
  protected int $likes = 0;

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setLikes($likes)
  {
    $this->likes = $likes;
  }

  public function getLikes()
  {
    return $this->likes;
  }
}

class PostImage extends Post
{
  private string $url;

  public function __construct($id, $url)
  {
    $this->setId($id);
    $this->url = $url;
    $this->likes = 0; // Herdado da classe Post - protected = visível para classes filhas - private = visível apenas para a classe
  }

  public function getUrl()
  {
    return $this->url;
  }
}

$foto = new PostImage(1, 'url_da_foto');
echo "Foto: " . $foto->getId() . " - " . $foto->getUrl(); // Foto: 1 - url_da_foto
