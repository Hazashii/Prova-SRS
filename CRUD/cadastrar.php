<?php

require __DIR__ . '/vendor/autoload.php';

define('TITLE', 'Cadastrar Pessoa');

use \App\Entity\Pessoa;

$obPessoa = new Pessoa;

//VALIDAÇÃO DO POST
if (isset($_POST['nome'], $_POST['cpf'], $_POST['idade'], $_POST['telefone'])) {

    $obPessoa->NOME = $_POST['nome'];
    $obPessoa->CPF = $_POST['cpf'];
    $obPessoa->IDADE = $_POST['idade'];
    $obPessoa->TELEFONE = $_POST['telefone'];
    $obPessoa->cadastrar();

    header('location: index.php?status=success');
    exit;
}

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/formulario.php';
include __DIR__ . '/includes/footer.php';
