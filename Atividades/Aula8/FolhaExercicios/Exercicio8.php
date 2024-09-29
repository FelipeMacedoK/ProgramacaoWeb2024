<?php

/*
8. Paulinho foi comprar uma moto nova. A empresa vende motos muito baratas pois
utiliza Juros Simples para o cálculo das parcelas.
Sabendo então que o valor a vista da moto é R$ 8.654,00.
Crie um programa que calcule o valor das parcelas para as opções abaixo, sabendo que
a taxa de juros aumenta 0,5% em cada nível e inicia em 1,5% para 24 vezes:
- 24 vezes
- 36 vezes
- 48 vezes
- 60 vezes
*/

$valorAVista = 8654.00;
$taxa24x = 0.015;
$taxa36x = 0.020;
$taxa48x = 0.025;
$taxa60x = 0.030;

function calcularTotal($valorAVista, $taxaJuros, $numParcelas) {
    return $valorAVista * (1 + ($taxaJuros * $numParcelas));
}

function calcularParcela($total, $numParcelas) {
    return $total / $numParcelas;
}

function exibirParcelas($valorAVista, $numParcelas, $taxaJuros) {
    $total = calcularTotal($valorAVista, $taxaJuros, $numParcelas);
    $parcela = calcularParcela($total, $numParcelas); 
    echo "Parcelas em $numParcelas vezes com taxa de juros de " . ($taxaJuros * 100) . "%: R$ " . number_format($parcela, 2, ',', '.') . "<br/>";
}

exibirParcelas($valorAVista, 24, $taxa24x);
exibirParcelas($valorAVista, 36, $taxa36x);
exibirParcelas($valorAVista, 48, $taxa48x);
exibirParcelas($valorAVista, 60, $taxa60x);

?>