<?php
header('Content-Type: text/html; charset=utf-8');

// LEMBRETE
//LINGUAGEM DE PROGRAMAÇÃO É IMPORTANTE
//RESPÓSTA BEM COMPLETA
//VALIDAÇÕES DE ERROS SÃO DESEJAVEIS

$palavra = $_GET["TxtPalavra"];

$tamanho = mb_strlen($palavra);
echo "<hr>";
echo $palavra;
echo "<hr>";
echo $tamanho;
echo "<hr>";

$i = 0;
$novaP = "";
//FOR 
for ($i = 0; $i < $tamanho; $i++) :
    $novaP = $palavra[$i] . $novaP;
endfor;

echo $novaP;
echo "<hr>";

//TRATAMENTO DE STRING REVERSO
echo strrev($palavra); //Função já existente para inverter o texto
echo "<hr>";


// Linha 11 Vemos que foi utilizada uma função para pegar o comprimento da string e $tamanho irá receber o valor
// Linha 21 é iniciado um FOR onde é comparado $i de valor 0, com a variavel $tamanho assim dando sequencia ao laço
// Linha 22 A cada execução do FOR, a $novaP irá receber o valor da $Palavra com a posição de $i na string, concatenado
// com a própria $novaP, fazendo assim todo novo caracter adicionado, se posicionar a esquerda, criando uma palavra invertida.
// Por exemplo: $Palavra = Igor 
// 1° -- I <== I. null
// 2° -- gI <== g.I
// 3°-- ogI <== o . gI
// 4° -- rogI <== r.ogI