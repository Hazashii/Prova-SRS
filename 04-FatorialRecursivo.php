<?php

$numero = $_GET["Numero"];

echo "O fatorial de $numero é : " . Fatorial($numero);

function Fatorial($numero)
{
    if ($numero == 0) :
        return 1;
    else :
        return $numero * Fatorial($numero - 1);
    endif;
}

// Linha 7 A função é declarada utilizando um parametro, $numero que busca o valor atraves de um get
// Linha 9 Criado uma condição IF onde compara se $numero é 0, pois sabemos que fatorial de !0 é 1 
// Linha 12 Se não validado a primeira condição, é chamado um Else onde ele retorna $numero * Fatorial,
// Fazendo assim uma recursividade na função de fatorial, e nosso ponto de parada será 0! = 1 ;