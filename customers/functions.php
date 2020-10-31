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
	$customers = find_all('customers');
}

/**
 *  Pesquisa Todos os Registros de uma Tabela
 */
function find_all( $table ) {
  return find($table);
}