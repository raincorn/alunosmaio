/**
 * Passa os dados do cliente para o Modal, e atualiza o link para exclusão
 */
$('#delete-modal').on('show.bs.modal', function (event) {

  var button = $(event.relatedTarget);
  var id = button.data('customer');

  var modal = $(this);
  modal.find('.modal-title').text('Excluir Aluno #' + id);
  modal.find('#confirm').attr('href', 'delete.php?id=' + id);
})

$('#uno-points').on('show.bs.modal', function (event) {

  var button = $(event.relatedTarget);
  var id = button.data('customer');

  var modal = $(this);
  modal.find('.modal-title').text('Dar Pontos #' + id);
  modal.find('#confirm').attr('href', 'points.php?id=' + id);
})
