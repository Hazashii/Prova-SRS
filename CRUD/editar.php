<?php

require __DIR__ . '/vendor/autoload.php';

define('TITLE', 'Editar Pessoa');

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
if (isset($_POST['nome'], $_POST['cpf'], $_POST['idade'], $_POST['telefone'])) {

    $obPessoa = new Pessoa;
    $obPessoa->PES_ID = $_GET['PES_ID'];
    $obPessoa->NOME = $_POST['nome'];
    $obPessoa->CPF = $_POST['cpf'];
    $obPessoa->IDADE = $_POST['idade'];
    $obPessoa->TELEFONE = $_POST['telefone'];
    $obPessoa->atualizar();

    header('location: index.php?status=success');
    exit;
}

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/formulario.php';
include __DIR__ . '/includes/footer.php';
