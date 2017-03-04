<?php
    require_once('functions.php');
    index();
    ?>
<?php
    if($_SESSION['id'] == false){

      header('Location:nologin.php');
    }
?>
<?php include(HEADER_TEMPLATE); ?>

<div class="container">
  <div class="jumbotron">
    <h1>Navbar example</h1>
    <p class="lead">This example is a quick exercise to illustrate how fixed to top navbar works. As you scroll, it will remain fixed to the top of your browser's viewport.</p>
    <a class="btn btn-lg btn-primary" href="../../components/navbar/" role="button">View navbar docs &raquo;</a>
  </div>
</div>
<header>
	<div class="row">
		<div class="col-sm-6">
      <br>
			<h2>Alunos</h2>
      <hr>
		</div>
		<div class="col-sm-6 text-right h2">
      <?php if($_SESSION['UsuarioNivel'] >= 2) : ?>
      <a href="#" class="btn btn-md btn-warning">
        <i class="fa fa-plus"></i> Dar Pontos
      </a>
    <?php endif; ?>
        <a href="index.php" class="btn btn-primary btn-md" role="button"><i class="fa fa-refresh"></i>  Atualizar</a>
	    </div>
	</div>
</header>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?> alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<?php echo $_SESSION['message']; ?>
	</div>
	<?php clear_messages(); ?>
<?php endif; ?>

<hr>
<div class="table-responsive">
<table class="table table-striped table-bordered table-hover">
<thead>
	<tr>
		<th>ID</th>
		<th width="30%">Nome</th>
		<th>usuario</th>
		<th>Pontos UNO</th>
		<th>Atualizado em</th>
		<th>Opções</th>
	</tr>
</thead>
<tbody>
<?php if ($customers) : ?>
<?php foreach ($customers as $customer) : ?>
	<tr>
		<td><?php echo $customer['id']; ?></td>
		<td><?php echo $customer['nome']; ?></td>
		<td><?php echo $customer['usuario']; ?></td>
		<td><?php echo $customer['uno']; ?></td>
		<td><?php echo $customer['editado']; ?></td>
		<td class="actions text-right">
			<a href="view.php?id=<?php echo $customer['id']; ?>" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Visualizar</a>
			<a href="edit.php?id=<?php echo $customer['id']; ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i> Editar</a>
			<a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal" data-customer="<?php echo $customer['id']; ?>">
				<i class="fa fa-trash"></i> Excluir
			</a>
		</td>
	</tr>
<?php endforeach; ?>
<?php else : ?>
	<tr>
		<td colspan="6">Nenhum registro encontrado.</td>
	</tr>
<?php endif; ?>
</tbody>
</table>
</div>
<?php include('modal.php'); ?> <!--- MODAL DO DELETE  --->
<?php include(FOOTER_TEMPLATE); ?>
