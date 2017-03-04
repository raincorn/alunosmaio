<?php

// Inicia a sessao

   session_start();

  // Verifica se houve POST e se o usu�rio ou a senha �(s�o) vazio(s)
  if (!empty($_POST) AND (empty($_POST['usuario']) OR empty($_POST['senha']))) {
      header("Location: index.php"); exit;
  }

  // Tenta se conectar ao servidor MySQL
  mysql_connect('localhost', 'root', 'omegalfa4703') or trigger_error(mysql_error());
  // Tenta se conectar a um banco de dados MySQL
  mysql_select_db('wda_crud') or trigger_error(mysql_error());

  $usuario = mysql_real_escape_string($_POST['usuario']);
  $senha = mysql_real_escape_string($_POST['senha']);

  // Valida��o do usu�rio/senha digitados
  $sql = "SELECT `id`, `nome`, `nivel` FROM `usuarios` WHERE (`usuario` = '".$usuario ."') AND (`senha` = '". sha1($senha) ."') AND (`ativo` = 1) LIMIT 1";
  $query = mysql_query($sql);
  if (mysql_num_rows($query) != 1) {
      // Mensagem de erro quando os dados s�o inv�lidos e/ou o usu�rio n�o foi encontrado
      echo "Login inválido!"; exit;
  } else {
      // Salva os dados encontrados na vari�vel $resultado
      $resultado = mysql_fetch_assoc($query);

      // Se a sess�o n�o existir, inicia uma
      if (!isset($_SESSION)) session_start();

      // Salva os dados encontrados na sess�o
      $_SESSION['UsuarioID'] = $resultado['id'];
      $_SESSION['UsuarioNome'] = $resultado['nome'];
      $_SESSION['UsuarioNivel'] = $resultado['nivel'];

      // Redireciona o visitante
      header("Location: customers/"); exit;
  }

  ?>
