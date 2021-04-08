<?php

$numero = $_GET["Numero"];
$fatorial = 1;
$count = 1;

while ($count <= $numero) {
    $fatorial *= $count;
    $count++;
}
echo $fatorial;

//Linha 3,4,5 Criamos algumas variaveis para utilizarmos durante o laço, $numero pega o valor inserido pelo usuário atraves do get
// Linha 7  $count =1 verifica se é menor que o valor inserido pelo usuario $numero enquanto a condição for True,
// $fatorial recebe ele mesmo multiplicado pelo $count, até terminar o laço.