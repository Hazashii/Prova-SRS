<?php

require __DIR__ . '/vendor/autoload.php';


use \App\Entity\Pessoa;

//VALIDAÇÃO DO ID
if (!isset($_GET['PES_ID']) or !is_numeric($_GET['PES_ID'])) {
    header('location: index.php?status=error');
    exit;
}

// CONSULTA A PESSOA
$obPessoa = Pessoa::getPessoa($_GET['PES_ID']);


//VALIDAÇÃO A PESSOA
if (!$obPessoa instanceof Pessoa) {
    header('location: index.php?status=error');
    exit;
}


//VALIDAÇÃO DO POST
if (isset($_POST['excluir'])) {

    $obPessoa->excluir();

    header('location: index.php?status=success');
    exit;
}

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/confirmar-exclusao.php';
include __DIR__ . '/includes/footer.php';
