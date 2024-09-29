<?php

/*
6. Joãozinho recebeu R$ 50,00 reais de seu pai para ir à feira comprar frutas e verduras.
Ele comprou maçã, melancia, laranja, repolho, cenoura, batatinha.
Crie um programa que calcule o valor gasto com cada produto comprado, sendo o
resultado do valor individual do produto em Kg multiplicado pela quantidade em Kg
comprada por Joãozinho.
Ao final escrever uma frase com o valor da compra, e uma previsão se o dinheiro será
o suficiente para pagar a conta, caso falte dinheiro escrever uma frase em vermelho
com o valor que ficou acima do disponível por Joãozinho, e não, escrever uma fase em
azul e o valor que Joãozinho ainda poderia gastar.
Caso o valor da compra seja exatamente igual ao R$ 50,00 disponível, escreva uma
frase em verde afirmando que o saldo para compras foi esgotado.
*/

// Definição de Valores
$saldoJoaozinho = 20.763;
$precos = [
    'maca' => 5.20,
    'melancia' => 1.35,
    'laranja' => 3.28,
    'repolho' => 0.99,
    'cenoura' => 2.83,
    'batatinha' => 1.99,
];

// Definição de Quantidades
$quantidades = [
    'maca' => 0.500,
    'melancia' => 5.000,
    'laranja' => 0.800,
    'repolho' => 4.000,
    'cenoura' => 0.300,
    'batatinha' => 2.000,
];

function calcularGastos($quantidades, $precos) {
    $valorTotal = 0;
    foreach ($quantidades as $item => $quantidade) {
        $valorTotal += $quantidade * $precos[$item];
    }
    return $valorTotal;
}

function exibeMensagem($totalGasto, $saldoJoaozinho) {
    if ($totalGasto < $saldoJoaozinho) {
        $saldoRestante = $saldoJoaozinho - $totalGasto;
        echo "<label style='color: blue;'>Joãozinho ainda pode gastar R$ " . number_format($saldoRestante, 2, ',', '.') . "</label>";
    } elseif ($totalGasto > $saldoJoaozinho) {
        $saldoFaltante = $totalGasto - $saldoJoaozinho;
        echo "<label style='color: red;'>Faltaram R$ " . number_format($saldoFaltante, 2, ',', '.') . "</label>";
    } else {
        echo "<label style='color: green;'>O saldo para compras foi esgotado.</label>";
    }
}

$totalGasto = calcularGastos($quantidades, $precos);

echo "Total gasto: R$ " . number_format($totalGasto, 2, ',', '.') . "<br/>";
exibeMensagem($totalGasto, $saldoJoaozinho)

?>