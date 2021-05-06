<?php

$mysqli = @mysqli_connect('localhost', 'les', 'SENHA_REMOVIDA', 'lesgocare');
if (!$mysqli) {
 echo "Error: " . mysqli_connect_error();
 exit();
}
  mysqli_set_charset($mysqli,"utf8");
   echo "Olá";

?>