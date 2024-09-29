<?php

/*
4. Crie um programa que calcule a área de um retângulo. Você deve configurar duas
variáveis que representam os lados a e bdesse quadrado em metros. Após o cálculo
escrever uma frase com o resultado da operação, exemplo: “A área do retângulo de
lados 3 e 2 metros é 6 metros quadrados.” Caso a área for maior que 10 escreva a frase
usando a tag h1, se não, escrever com h3.
*/

$lado = 6;
$base = 2;

function exibeMensagem($mensagem) {
    echo $mensagem;
}

function calcularArea($lado,$base) {
    $area = $lado*$base;
    if ($area > 10) {
        return exibeMensagem("<h1>A área do retângulo de lados $lado e $base metros é $area metros quadrados.</h1>");
    }
    else {
        return exibeMensagem("<h3>A área do retângulo de lados $lado e $base metros é $area metros quadrados.</h3>");
    }
}

exibeMensagem(calcularArea($lado,$base))

?>