<?php

require __DIR__ . '/vendor/autoload.php';

use \App\Entity\Pessoa;



//busca
$busca2 = filter_input(INPUT_GET, 'pidade', FILTER_SANITIZE_STRING);
if (isset($_GET['pidade'])) {
    //CONDIÇÕES SQL
    $condicoes = [
        strlen($busca2) ? 'IDADE = ' . $busca2 : null
    ];

    //CLAUSULA WHERE
    $where = implode(' AND ', $condicoes);
    $pessoas = Pessoa::getPessoas($where);
    $total = Pessoa::getCount();

    include __DIR__ . '/includes/header.php';
    include __DIR__ . '/includes/listagem-idade.php';
    include __DIR__ . '/includes/footer.php';
    exit;
}

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/formulario-idade.php';
include __DIR__ . '/includes/footer.php';
