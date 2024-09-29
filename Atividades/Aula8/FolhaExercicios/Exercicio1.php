<?php

/*
1. Criar um programa que execute a soma de três valores.
Se a primeira variável for maior que 10, escrever o resultado da operação em azul
Se a segunda variável for menor que a terceira, escrever o resultado em verde
Se a terceira variável for menor que a primeira e a segunda variável escrever o
resultado em vermelho
*/

$valor1 = 5;
$valor2 = 5;
$valor3 = 1;

function verificarCor($valor1,$valor2,$valor3) {
    if ($valor1 > 10) {
        return "blue";
    }
    else if ($valor2 < $valor3) {
        return "green";
    }
    else if ($valor3 < $valor1 && $valor3 < $valor2) {
        return "red";
    }
}

function executarSoma($valor1,$valor2,$valor3) {
    return $valor1 + $valor2 + $valor3;
}

$soma = executarSoma($valor1, $valor2, $valor3);
$cor = verificarCor($valor1, $valor2, $valor3);

echo "<label style='color: $cor;'>O valor após o cálculo é " . $soma . "</label>";

?>