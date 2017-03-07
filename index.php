<?php require_once('config.php'); ?>

<?php include(HEADER_TEMPLATE); ?>
<?php include(NAVBAR_TEMPLATE); ?>
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
