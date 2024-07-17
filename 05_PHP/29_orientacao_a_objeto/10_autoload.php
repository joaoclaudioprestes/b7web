<?php
spl_autoload_register(function ($class) {
  require "29_orientacao_a_objeto/$class.php";
});

$autoload = new Autoload();
echo $autoload->registrar();
