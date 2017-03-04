<?php require_once('../config.php'); ?>
<?php header ('Content-type: text/html; charset=UTF-8'); ?>
<html>
<head>
  <title> Sem login? Nah.. </title>
  <link rel="stylesheet" href="<?php echo BASEURL; ?>css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo BASEURL; ?>css/style.css">
  <link rel="stylesheet" href="<?php echo BASEURL; ?>css/bootstrap.min.css.map">
  <link rel="stylesheet" href="<?php echo BASEURL; ?>css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
</head>
<body>

  <div class="container center">
<h1><i class="fa fa-frown-o"></i></h1>
<h3>Página autorizada somente com Login.</h3>
<p><strong>Esta página só pode ser vista se você fizer seu login.</strong></p>

<p>
Se você não tiver uma conta,
<a href="<?php echo BASEURL; ?>registrar.php">crie uma agora mesmo.</a>
para fazer parte desta comunidade
é fácil, grátis e rápido.
</p>
<p>Caso ache que isso é um erro e que um  <i class="fa fa-rocket fa-2x fa-rotate-90"></i> Zappellin nos atingiu entre em contato.</p>

<div class="btn-group dropup">
  <div class="btn-group" role="group" aria-label="...">
    <a class="btn btn-warning" href="<?php echo BASEURL; ?>about/">Contato</a>
    <a type="button" class="btn btn-info" href="<?php echo BASEURL; ?>index.php">Inicio</a>
    <a type="button" class="btn btn-primary" href="<?php echo BASEURL; ?>login.php">Login</a>
  </div>
</div>
</div>

<?php include(FOOTER_TEMPLATE); ?>
