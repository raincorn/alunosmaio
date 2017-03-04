<?php require_once('config.php'); ?>

<?php include(HEADER_TEMPLATE); ?>


  <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#"><?php echo $sitename; ?></a>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="<?php BASEURL; ?>">Início <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="/about">Administração</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Blog</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle disabled" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sobre</a>
          <div class="dropdown-menu" aria-labelledby="dropdown01">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0" action="validacao.php" method="post">
        <input class="col-md-3 form-control mr-sm-2" type="text" name="usuario" placeholder="Usuário">
        <input class="form-control mr-sm-2" type="text" name="senha" placeholder="Senha">
        <button class="btn btn-primary" type="submit">Entrar</button>
      </form>
      <button type="button" class="btn btn-success" href="<?php echo BASEURL; ?>/registrar.php">Criar Conta</button>
    </div>
  </nav>

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
    <div class="container-fluid">
      <div class="visible-xs-inline">
      <h1 class="display-3">AlunosMaio</h1>
    </div>
            <p>Este espaço é dedicado aos alunos do C.E. 1  de Maio, caso você seja um, requisite sua conta, é grátis e você terá acesso a notícias, eventos e informações.
            Esta é uma comunidade livre sua <mark>contribuição será de grande importância</mark>.</p>
      <p><a class="btn  btn-outline-success btn-primary btn-lg" href="<?php echo BASEURL; ?>/about/" role="button">Leia mais &raquo;</a></p>
    </div>
  </div>

  <div class="container-fluid">
    <!-- Example row of columns -->
    <div class="row">
      <div class="col-md-4">
        <h2>Código aberto</h2>
        <p>Este site faz parte do <bold>open source project</bold> e seu código está disponível para ser hackeado.</p>
        <p><a class="btn btn-secondary" href="<?php echo BASEURL; ?>/about/" role="button">Ver detalhes &raquo;</a></p>
      </div>
      <div class="col-md-4">
        <h2>Notícias</h2>
        <p> Notícias sobre seu cotidiano, informações importantes e anúncios. Não vá até as informações, elas vem até você. </p>
        <p><a class="btn btn-danger disabled" href="<?php echo BASEURL; ?>/noticias/" role="button">Não disponível &raquo;</a></p>
     </div>
      <div class="col-md-4">
        <h2>UNO League</h2>
        <p>A turma 3003 está começando um campeonado de UNO que terá apenas um vencedor, confira as nótícias, regras e pontuação. </p>
        <p><a class="btn btn-info" href="<?php echo BASEURL; ?>customers" role="button">Ver detalhes &raquo;</a></p>
      </div>
    </div>
  </div> <!-- /container -->

  <?php include(FOOTER_TEMPLATE); ?>
