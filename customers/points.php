<?php
  require_once('functions.php');
  if (isset($_GET['id'])){
    edit($_GET['id']);
  } else {
    die("ERRO: usuário não definido.");
  }
?>
