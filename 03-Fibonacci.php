<?php

$numero = $_GET["Numero"];
$ultimo = 1;
$penultimo = 0;
$atual;




echo "0<br />1<br />";
for ($count = 0; $count <= $numero - 2; $count++) {
    $atual = $ultimo + $penultimo;
    echo $atual . "<br />";

    $penultimo = $ultimo;
    $ultimo = $atual;
}
echo "<hr>";
echo "O Termo $numero é : $atual";


//Linha 11, Começamos exibindo os termos 0 e 1, que são sempre os iniciais, 
//dando continuidade aos numeros expressados até o termo desejado pelo usuário.
// Linha 12 Instanciamos um FOR, para atualizarmos nossas nossas variaveis, assim montando a sequencia de Fibonacci,
// $numero -2 porque já exibimos os dois primeiros valores.
//  Com a execução do laço, será somado o valor $ultimo + $penultimo no mostrando o valor $atual
// Sendo assim, o nosso $penultimo recebe o valor de $ultimo e $ultimo recebendo o valor de $atual 
// Continuando até a finalização do Laço. 