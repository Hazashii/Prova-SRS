<?php

require __DIR__ . '/vendor/autoload.php';

use \App\Entity\Pessoa;

//BUSCA
$busca = filter_input(INPUT_GET, 'busca', FILTER_SANITIZE_STRING);

//CONDIÇÕES SQL
$condicoes = [
    strlen($busca) ? 'CPF CONTAINING ' . $busca : null
];


//CLAUSULA WHERE
$where = implode(' AND ', $condicoes);

//OBTÉM AS VAGAS
$pessoas = Pessoa::getPessoas($where);


include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/listagem.php';
include __DIR__ . '/includes/footer.php';
