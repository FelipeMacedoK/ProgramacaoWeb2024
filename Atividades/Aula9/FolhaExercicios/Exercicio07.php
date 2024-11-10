<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 7</title>
</head>
<body>
    <a style="padding: 50px;" href="index.html">Retornar ao Início</a>
    <form method="post">
        <fieldset>
            <legend>Exercício 7</legend>
            <ul>
                <li>
                    <label for="valorAVista">Valor à vista (R$):</label>
                    <input id="valorAVista" type="number" name="valorAVista" required placeholder="22500.00" step="0.01">
                </li>
                <li>
                    <label for="valorParcela">Valor da parcela (R$):</label>
                    <input id="valorParcela" type="number" name="valorParcela" required placeholder="489.65" step="0.01">
                </li>
                <li>
                    <label for="quantidadeParcela">Quantidade de parcelas:</label>
                    <input id="quantidadeParcela" type="number" name="quantidadeParcela" required placeholder="60">
                </li>
            </ul>
            <input type="submit" value="Calcular Juros">
            <input type="reset" value="Limpar">
        </fieldset>
    </form>

    <?php
    /*
    7. Mariazinha foi comprar um carro novo que custa R$ 22.500,00 à vista. Como não
    tem esse dinheiro, resolveu fazer um financiamento, com 60 parcelas de R$ 489,65.
    Escreva um programa que calcule o valor dos juros pagos por Mariazinha.
    */

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valorAVista = $_POST['valorAVista'];
        $valorParcela = $_POST['valorParcela'];
        $quantidadeParcela = $_POST['quantidadeParcela'];

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

        exibeMensagem("Valor do carro à vista: R$ " . number_format($valorAVista, 2, ',', '.') . "<br>");
        exibeMensagem("Valor da Parcela: R$$valorParcela<br>");
        exibeMensagem("Quantidade de Parcelas: $quantidadeParcela<br>");
        exibeMensagem("Valor total do financiamento: R$ " . number_format($valorTotal, 2, ',', '.') . "<br>");
        exibeMensagem("Valor pago de juros: R$ " . number_format($valorJuros, 2, ',', '.'));
    }
    ?>
</body>
</html>