<?php
require_once('../config.php');
require_once(DBAPI);
$customers = null;
$customer = null;
/**
 *  Listagem de Clientes
 */
function index() {
	global $customers;
	$customers = find_all('usuarios');
}


/**
 *  Cadastro de Clientes
 */
function add() {
  if (!empty($_POST['usuarios'])) {

    $today =
      date_create('now', new DateTimeZone('America/Sao_Paulo'));
    $customer = $_POST['usuarios'];
    $customer['modificado'] = $customer['cadastro'] = $today->format("Y-m-d H:i:s");

    save('usuarios', $customer);
    header('location: index.php');
  }
}
/**
 *	Atualizacao/Edicao de Cliente
 */
function edit() {
  $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if (isset($_POST['usuarios'])) {
      $customer = $_POST['usuarios'];
      $customer['modificado'] = $now->format("Y-m-d H:i:s");
      update('usuarios', $id, $customer);
      header('location: index.php');
    } else {
      global $customer;
      $customer = find('usuario', $id);
    }
  } else {
    header('location: index.php');
  }
}
/**
 *  Visualização de um Cliente
 */
function view($id = null) {
  global $customer;
  $customer = find('usuarios', $id);
}
/**
 *  Exclusão de um Cliente
 */
function delete($id = null) {
  global $customer;
  $customer = remove('usuarios', $id);
  header('location: index.php');
}
