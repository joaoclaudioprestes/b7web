<!-- enctype="multipart/form-data" é necessário para enviar arquivos -->
<form method="post" action="../26_upload_arquivos/recebedor.php" enctype="multipart/form-data">
  <input type="file" name="arquivo">
  <input type="submit" value="Enviar">
</form>

<div>
  <?php
  foreach (scandir('arquivos') as $file) {
    if ($file === '.' || $file === '..') continue;
    echo "<img src='arquivos/$file' style='max-width: 50px;'><br>";
  }
  ?>
</div>