<?php

/*
7. Mariazinha foi comprar um carro novo esse carro custa R$ 22.500,00 a vista, mas como
ela não tem esse dinheiro para comprar a vista, resolveu fazer um financiamento, que
ficou em 60 parcelas de R$ 489,65.
Escreva um programa que calcule o valor gasto só dos juros que serão pagos por
Mariazinha em comparação ao valor a vista do carro.
*/

$valorAVista = 22500.00;
$valorParcela = 489.65;
$quantidadeParcela = 60;

function calcularTotal($valorParcela, $quantidadeParcela) {
    return $valorParcela * $quantidadeParcela;
}

function calcularJuros($valorTotal, $valorAVista) {
    return $valorTotal - $valorAVista;
}

function exibeMensagem($mensagem) {
    echo $mensagem;
}

$valorTotal = calcularTotal($valorParcela, $quantidadeParcela);
$valorJuros = calcularJuros($valorTotal, $valorAVista);

exibeMensagem("Valor do carro à vista: R$ " . number_format($valorAVista, 2, ',', '.') . "<br/>");
exibeMensagem("Valor total do financiamento: R$ " . number_format($valorTotal, 2, ',', '.') . "<br/>");
exibeMensagem("Valor pago de juros: R$ " . number_format($valorJuros, 2, ',', '.'));

?>
