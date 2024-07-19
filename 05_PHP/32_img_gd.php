<?php
// Cria uma imagem PNG de 300x300 pixels
$image = imagecreatetruecolor(300, 300);

// Preenche a imagem com a cor vermelha
$vermelho = imagecolorallocate($image, 255, 0, 0);
imagefill($image, 0, 0, $vermelho);

// Define o tipo de conteúdo para imagem PNG
header('Content-Type: image/png');

// Envia a imagem para o navegador
imagepng($image);

// Libera a memória associada à imagem
imagedestroy($image);