<?php
// $_FILES é uma variável superglobal que contém informações sobre os arquivos enviados por meio de formulários
echo '<pre>';
print_r($_FILES);

if (in_array($_FILES["arquivo"]["type"], array('image/jpeg', 'image/jpg', 'image/png'))) {
  $name = md5(time() . rand(0, 1000)) . ".jpg";
  move_uploaded_file($_FILES['arquivo']['tmp_name'], 'arquivos/' . "{$name}");

  echo 'Arquivo enviado com sucesso!';
};

// move_uploaded_file é uma função que move um arquivo enviado para um diretório específico no servidor (o primeiro argumento é o arquivo temporário e o segundo argumento é o destino final)

echo '</pre>';

echo '<a href="../26_upload_arquivos/index.php">Voltar</a>';
