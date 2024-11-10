<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5</title>
</head>
<body>
    <a style="padding: 50px;" href="index.html">Retornar ao Início</a>
    <form method="post">
        <fieldset>
            <legend>Exercício 5</legend>
            <ul>
                <li>
                    <label for="base">Insira o valor da base (em metros):</label>
                    <input id="base" type="number" name="base" required step="0.01">
                </li>
                <li>
                    <label for="altura">Insira o valor da altura (em metros):</label>
                    <input id="altura" type="number" name="altura" required step="0.01">
                </li>
            </ul>
            <input type="submit" value="Calcular Área">
            <input type="reset" value="Limpar">
        </fieldset>
    </form>

    <?php
    /*
    5. Crie um programa que calcule a área de um triângulo retângulo. A fórmula é:
    Resultado = (Base * Altura) / 2
    Exiba uma frase com o valor da operação.
    */

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $base = $_POST['base'];
        $altura = $_POST['altura'];

        function exibeMensagem($mensagem) {
            echo $mensagem;
        }

        function calcularArea($base, $altura) {
            return ($base * $altura) / 2;
        }

        $area = calcularArea($base, $altura);
        exibeMensagem("A área de um triângulo retângulo de base $base e altura $altura é $area metros quadrados.");
    }
    ?>
</body>
</html>