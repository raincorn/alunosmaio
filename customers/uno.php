<?php
  require_once('functions.php');
  edit();
?>
<div class="modal fade" id="uno-points" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modalLabel">Dar Pontos</h4>
      </div>
      <div class="modal-body">
        <form class="form-inline" method="post" action="uno.php?id=<?php echo $customer['id']; ?>">
          <div class="form-group">
            <label for="exampleInputName2">Usuário</label>
            <input name="customer['nome']" type="text" class="form-control" id="exampleInputName2" placeholder="alipseight">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail2">PONTOS</label>
            <input name="customer['uno']" type="text" class="form-control" id="exampleInputName2" placeholder="8">
          </div>
          <button type="submit" class="btn btn-sucess">ENVIAR PONTOS</button>
          <a href="index.php" class="btn btn-primary">Cancelar</a>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" id="cancel" class="btn btn-danger" data-dismiss="modal">SAIR</button>
      </div>
    </div>
  </div>
</div> <!-- /.modal -->
