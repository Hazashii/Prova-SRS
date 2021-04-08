<?php

require __DIR__ . '/vendor/autoload.php';

use \App\Entity\Pessoa;

$menoridade = Pessoa::getPessoas($where = 'IDADE = (select MIN(IDADE) FROM PESSOA)');
$maioridade = Pessoa::getPessoas($where = 'IDADE = (select MAX(IDADE) FROM PESSOA)');
$mediaidade = Pessoa::getMedia();


include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/listagem-media.php';
include __DIR__ . '/includes/footer.php';
