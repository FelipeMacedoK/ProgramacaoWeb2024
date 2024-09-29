<?php

/*
3. Crie um programa que calcule a área de um quadrado. Você deve configurar uma
variável que representa o comprimento dos lados de um quadrado em metros. Após o
cálculo escrever uma frase com o resultado da operação, exemplo: “A área do
quadrado de lado 3 metros é 9 metros quadrados”
*/

$lado = 3;

function exibeMensagem($mensagem) {
    echo $mensagem;
}

function calcularArea($lado) {
    $area = $lado*$lado;
    return exibeMensagem("A área do quadrado de lado $lado metros é $area metros quadrados");
}

calcularArea($lado);

?>