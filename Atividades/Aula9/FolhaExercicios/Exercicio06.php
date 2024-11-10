<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 6</title>
</head>
<body>
    <a style="padding: 50px;" href="index.html">Retornar ao Início</a>
    <form method="post">
        <fieldset>
            <legend>Exercício 6</legend>
            <ul>
                <li>
                    <label for="maca">Maçã (R$5,20 - Kg):</label>
                    <input id="maca" type="number" name="maca" step="0.01">
                </li>
                <li>
                    <label for="melancia">Melancia (R$1,35 - Kg):</label>
                    <input id="melancia" type="number" name="melancia" step="0.01">
                </li>
                <li>
                    <label for="laranja">Laranja (R$3,28 - Kg):</label>
                    <input id="laranja" type="number" name="laranja" step="0.01">
                </li>
                <li>
                    <label for="repolho">Repolho (R$0,99 - Kg):</label>
                    <input id="repolho" type="number" name="repolho" step="0.01">
                </li>
                <li>
                    <label for="cenoura">Cenoura (R$2,83 - Kg):</label>
                    <input id="cenoura" type="number" name="cenoura" step="0.01">
                </li>
                <li>
                    <label for="batatinha">Batatinha (R$1,99 - Kg):</label>
                    <input id="batatinha" type="number" name="batatinha" step="0.01">
                </li>
            </ul>
            <input type="submit" value="Calcular Gastos">
            <input type="reset" value="Limpar">
        </fieldset>
    </form>

    <?php
    /*
    6. Joãozinho recebeu R$ 50,00 reais de seu pai para ir à feira comprar frutas e verduras.
    Ele comprou maçã, melancia, laranja, repolho, cenoura, batatinha.
    Crie um programa que calcule o valor gasto com cada produto comprado, sendo o
    resultado do valor individual do produto em Kg multiplicado pela quantidade em Kg
    comprada por Joãozinho. Ao final, escrever uma frase com o valor da compra e uma previsão
    se o dinheiro será suficiente para pagar a conta.
    */

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $saldoJoaozinho = 50.00;

        // Preços por Kg
        $precos = [
            'maca' => 5.20,
            'melancia' => 1.35,
            'laranja' => 3.28,
            'repolho' => 0.99,
            'cenoura' => 2.83,
            'batatinha' => 1.99,
        ];

        // Quantidades compradas por Joãozinho
        $quantidades = [
            'maca' => $_POST['maca'],
            'melancia' => $_POST['melancia'],
            'laranja' => $_POST['laranja'],
            'repolho' => $_POST['repolho'],
            'cenoura' => $_POST['cenoura'],
            'batatinha' => $_POST['batatinha'],
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
        exibeMensagem($totalGasto, $saldoJoaozinho);
    }
    ?>
</body>
</html>