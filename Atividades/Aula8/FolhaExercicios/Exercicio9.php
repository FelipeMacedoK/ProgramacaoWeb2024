<?php

/*
9. Juquinha seguindo o mesmo caminho que Paulinho foi comprar uma moto nova, mas
pena que ele não sabia da mesma chance que Paulinho.
A empresa que Juquinha foi comprar a moto utiliza juros compostos para calcular o
valor das parcelas.
As opções de compras estudadas por ele são as mesmas de Paulinho, ou seja 24, 36,
48 e 60 vezes o juro nesta empresa inicia em 2% para 24 vezes e aumenta 0,3% para
as opções de parcelamento seguintes.
Utilizando então a fórmula de juros composto que segue abaixo, calcule o valor da
parcela para cada uma das opções a ser estudada por Juquinha.
M = C * (1 + i)t , onde:
M = Montante
C = Capital Inicial
i = Taxa de juros
t = Tempo
*/

$valorAVista = 8654.00;
$taxa24x = 0.02;
$taxa36x = 0.023;
$taxa48x = 0.026;
$taxa60x = 0.029;

function calcularMontante($valorAVista, $taxaJuros, $numParcelas) {
    return $valorAVista * pow((1 + $taxaJuros), $numParcelas);
}

function calcularParcela($montante, $numParcelas) {
    return $montante / $numParcelas;
}

function exibirParcelas($valorAVista, $numParcelas, $taxaJuros) {
    $montante = calcularMontante($valorAVista, $taxaJuros, $numParcelas);
    $parcela = calcularParcela($montante, $numParcelas);
    echo "Parcelas em $numParcelas vezes com taxa de juros de " . ($taxaJuros * 100) . "%: R$ " . number_format($parcela, 2, ',', '.') . "<br/>";
}

exibirParcelas($valorAVista, 24, $taxa24x);
exibirParcelas($valorAVista, 36, $taxa36x);
exibirParcelas($valorAVista, 48, $taxa48x);
exibirParcelas($valorAVista, 60, $taxa60x);

?>
