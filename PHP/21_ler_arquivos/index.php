<h1>O texto presente no arquivo é</h1>

<?php
$texto = file_get_contents('text.txt');

$texto = nl2br($texto);

echo $texto;
?>