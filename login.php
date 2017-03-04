<?php require_once('config.php') ?>
<?php header ('Content-type: text/html; charset=UTF-8'); ?>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo BASEURL; ?>css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo BASEURL; ?>css/signin.css">
</head>
  <body>

    <div class="container-fluid">

      <form class="form-signin" action="validacao.php" method="post">
        <h2 class="form-signin-heading">Por favor, faça o login antes...</h2>
        <label for="txUsuario" class="sr-only">usuário</label>
        <input type="text"  name="usuario" id="txUsuario" class="form-control" placeholder="Usuário" required autofocus>
        <input type="password" name="senha" id="inputPassword" class="form-control" placeholder="Senha" required>
    <label for="inputPassword"  class="sr-only">senha</label>
        <div class="checkbox">
          <label>
            <input type="checkbox" name="lembrar_senha" value="lembrar_senha"> Lembrar-me
          </label>
        </div>
        <button id="entrar" autocomplete="off" class="btn btn-lg btn-primary btn-block" data-loading-text="Carregando..." type="submit">Entrar</button>
      </form>

    </div> <!-- /container -->


    <?php include(FOOTER_TEMPLATE); ?>
