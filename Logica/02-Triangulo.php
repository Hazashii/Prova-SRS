<?php
header('Content-Type: text/html; charset=utf-8');

$Lado1 = $_GET["L1Triangulo"];
$Lado2 = $_GET["L2Triangulo"];
$Lado3 = $_GET["L3Triangulo"];

function CalculaLados($Lado1, $Lado2, $Lado3)
{

    if (!empty($Lado1) && (!empty($Lado2)) &&  (!empty($Lado3))) :


        if (($Lado1 <=  $Lado2 + $Lado3) && ($Lado2 <= $Lado1 + $Lado3) && ($Lado3 <= $Lado1 + $Lado2)) :
            echo "<br>Os valores representam um Triangulo ";

            if (($Lado1 == $Lado2) && ($Lado2 == $Lado3)) :
                echo "Equilatero<br>";

            elseif (($Lado1 != $Lado2) && ($Lado1 != $Lado3) && ($Lado2 != $Lado3)) :
                echo "Escaleno<br>";
            else :
                echo "Isosceles<br>";

            endif;

        else :
            echo "<br>Os valores nao representam um Triangulo válido";
        endif;
    else :
        echo "Não foi informado valores <br>";

    endif;
}

CalculaLados($Lado1, $Lado2, $Lado3);

//Linha 8 uma função é declarada com parametros, de respectivas variaveis que buscam os valores através do get como vemos nas linhas 4,5,6.
// Linha 11 é criado uma condição IF para verificar se algum dos valores não foi preenchido verificando assim se $Lado1, $Lado2 e $Lado3 são diferente de vazio.
// Linha 14 é criado uma condição IF para verificar se os valores apresentados é um Triangulo válido ou não, pois sabemos que os lados só formam um triângulo se o comprimento de um lado for sempre menor do que a soma dos outros dois.
//Linha 17 é utilizada uma condição IF para verificar se o triangulo é equilatero, comparando $Lado1 == $Lado2 e $Lado2 == $Lado3 se a condição é valida então é Equilatero.
//Linha  20 Se ele não cumprir os requisitos na primeira verificação, ele entra no ELSEIF, passando por uma segunda verificação onde faz uma comparação se $Lado1, $Lado2 e $Lado3 possuem lados diferentes, se a condição é valida então é Escaleno
//Linha 22 Se passado por as duas verificações e ainda não foi validado, passamos pelo ultimo else, e concluimos que o triangulo é um Isosceles. 
