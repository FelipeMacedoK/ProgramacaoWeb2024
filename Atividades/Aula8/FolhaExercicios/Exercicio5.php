<?php

/*
5. Crie um programa que calcule a área de um triângulo retângulo, cuja fórmula segue
abaixo. Crie as variáveis apropriadas para o cálculo em PHP e por fim exiba uma frase
com o valor da operação.
Fórmula -> Resultado = (Base * Altura) / 2
*/

$base = 6;
$altura = 5;

function exibeMensagem($mensagem) {
    echo $mensagem;
}

function calcularArea($base,$altura) {
    return ($base*$altura)/2;
}

exibeMensagem("A área de um triângulo retângulo de base $base e altura $altura é " . calcularArea($base,$altura))

?>