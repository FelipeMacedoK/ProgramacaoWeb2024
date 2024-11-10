<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 9</title>
</head>
<body>
    <a style="padding: 50px;" href="index.html">Retornar ao Início</a>
    <form method="post">
        <fieldset>
            <legend>Exercício 9</legend>
            <ul>
                <li>
                    <label for="valorAVista">Valor à vista da moto (R$):</label>
                    <input id="valorAVista" type="number" name="valorAVista" step="0.01" placeholder="8654.00"required>
                </li>
            </ul>
            <input type="submit" value="Calcular Parcelas">
            <input type="reset" value="Limpar">
        </fieldset>
    </form>

    <?php
    /*
    9. Juquinha seguindo o mesmo caminho que Paulinho foi comprar uma moto nova, mas
    pena que ele não sabia da mesma chance que Paulinho. A empresa que Juquinha foi
    comprar a moto utiliza juros compostos para calcular o valor das parcelas.
    As opções de compras estudadas por ele são as mesmas de Paulinho, ou seja 24, 36,
    48 e 60 vezes o juro nesta empresa inicia em 2% para 24 vezes e aumenta 0,3%
    para as opções de parcelamento seguintes. Utilizando então a fórmula de juros composto
    que segue abaixo, calcule o valor da parcela para cada uma das opções a ser estudada 
    por Juquinha.
    M = C * (1 + i)^t , onde:
    M = Montante
    C = Capital Inicial
    i = Taxa de juros
    t = Tempo
    */

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valorAVista = $_POST['valorAVista'];
        
        $taxas = [
            24 => 0.02,
            36 => 0.023,
            48 => 0.026,
            60 => 0.029
        ];

        function calcularMontante($valorAVista, $taxaJuros, $numParcelas) {
            return $valorAVista * pow((1 + $taxaJuros), $numParcelas);
        }

        function calcularParcela($montante, $numParcelas) {
            return $montante / $numParcelas;
        }

        function exibirParcelas($valorAVista, $numParcelas, $taxaJuros) {
            $montante = calcularMontante($valorAVista, $taxaJuros, $numParcelas);
            $parcela = calcularParcela($montante, $numParcelas);
            echo "Parcelas em $numParcelas vezes com taxa de juros de " . ($taxaJuros * 100) . "%: R$ " . number_format($parcela, 2, ',', '.') . "<br>";
        }

        echo "Valor da Moto: R$$valorAVista<br>";
        foreach ($taxas as $numParcelas => $taxaJuros) {
            exibirParcelas($valorAVista, $numParcelas, $taxaJuros);
        }
    }
    ?>
</body>
</html>