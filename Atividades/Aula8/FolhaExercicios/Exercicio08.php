<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 8</title>
</head>
<body>
    <a style="padding: 50px;" href="index.html">Retornar ao Início</a>
    <form method="post">
        <fieldset>
            <legend>Exercício 8</legend>
            <ul>
                <li>
                    <label for="valorAVista">Valor à vista da moto (R$):</label>
                    <input id="valorAVista" type="number" name="valorAVista" placeholder="8654.00" step="0.01" required>
                </li>
            </ul>
            <input type="submit" value="Calcular Parcelas">
            <input type="reset" value="Limpar">
        </fieldset>
    </form>

    <?php
    /*
    8. Paulinho foi comprar uma moto nova. A empresa vende motos muito baratas pois
    utiliza Juros Simples para o cálculo das parcelas. Sabendo então que o valor à vista 
    da moto é R$ 8.654,00, crie um programa que calcule o valor das parcelas para as 
    opções abaixo, sabendo que a taxa de juros aumenta 0,5% em cada nível e inicia 
    em 1,5% para 24 vezes:
    - 24 vezes
    - 36 vezes
    - 48 vezes
    - 60 vezes
    */

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valorAVista = $_POST['valorAVista'];
        
        $taxas = [
            24 => 0.015,
            36 => 0.020,
            48 => 0.025,
            60 => 0.030
        ];

        function calcularTotal($valorAVista, $taxaJuros, $numParcelas) {
            return $valorAVista * (1 + ($taxaJuros * $numParcelas));
        }

        function calcularParcela($total, $numParcelas) {
            return $total / $numParcelas;
        }

        function exibirParcelas($valorAVista, $numParcelas, $taxaJuros) {
            $total = calcularTotal($valorAVista, $taxaJuros, $numParcelas);
            $parcela = calcularParcela($total, $numParcelas); 
            echo "Parcelas em $numParcelas vezes com taxa de juros de " . ($taxaJuros * 100) . "%: R$ " . number_format($parcela, 2, ',', '.') . "<br>";
        }

        echo "Valor da moto: R$$valorAVista<br>";
        foreach ($taxas as $numParcelas => $taxaJuros) {
            exibirParcelas($valorAVista, $numParcelas, $taxaJuros);
        }
    }
    ?>
</body>
</html>