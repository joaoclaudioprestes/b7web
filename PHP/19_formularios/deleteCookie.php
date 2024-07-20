<?php
setcookie("nome", "", time() - 3600);

header("Location: form.php");
exit;
