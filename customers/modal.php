<!-- Modal de Delete-->
<?php if($_SESSION['UsuarioNivel'] >= 3) : ?>
<div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modalLabel">Excluir Item</h4>
      </div>
      <div class="modal-body">
        Deseja realmente excluir este item?
      </div>
      <div class="modal-footer">
        <a id="confirm" class="btn btn-primary" href="#">Sim</a>
        <a id="cancel" class="btn btn-default" data-dismiss="modal">N&atilde;o</a>
      </div>
    </div>
  </div>
</div> <!-- /.modal -->
<?php else : ?>
  <div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="modalLabel">ACESSO NEGADO</h4>
        </div>
        <div class="modal-body">
        VOCÊ NÃO POSSUI AUTORIZAÇÃO O SUFICIENTE PARA REALIZAR ESTA AÇÃO. ÁREA RESTRITA APENAS A PESSOAL AUTORIZADO.
        CASO VOCÊ ACHE QUE ISSO É UM ERRO, CONTATE O ADMINISTRADOR.


        <div class="panel panel-default">
      <!-- Default panel contents -->
      <div class="panel-heading">Equipe</div>

      <!-- Table -->
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Rank</th>
            <th>Nível</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Magno R.</td>
            <td><span class="label label-danger">SysAdmin</span></td>
            <td>9</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Ana Clara L.</td>
            <td>Moderator</td>
            <td>2</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Jean E.</td>
            <td>Moderador</td>
            <td>2</td>
          </tr>
        </tbody>
      </table>
    </div>
        </div>
        <div class="modal-footer">
          <a id="cancel" class="btn btn-info" data-dismiss="modal">N&atilde;o</a>
        </div>
      </div>
    </div>
  </div> <!-- /.modal -->
<?php endif; ?>
