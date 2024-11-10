<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
</head>
<body>
    <a style="padding: 50px;" href="index.html">Retornar ao Início</a>
    <form method="post">
        <fieldset>
            <legend>Exercício 1</legend>
            <ul>
                <li>
                    <label for="valor1">Valor 1:</label>
                    <input id="valor1" type="number" name="valor1" required>
                </li>
                <li>
                    <label for="valor2">Valor 2:</label>
                    <input id="valor2" type="number" name="valor2" required>
                </li>
                <li>
                    <label for="valor3">Valor 3:</label>
                    <input id="valor3" type="number" name="valor3" required>
                </li>
            </ul>
            <input type="submit" value="Enviar">
            <input type="reset" value="Limpar">
        </fieldset>
    </form>

    <?php
    /*
    1. Criar um programa que execute a soma de três valores.
    Se a primeira variável for maior que 10, escrever o resultado da operação em azul
    Se a segunda variável for menor que a terceira, escrever o resultado em verde
    Se a terceira variável for menor que a primeira e a segunda variável escrever o
    resultado em vermelho
    */

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valor1 = $_POST['valor1'];
        $valor2 = $_POST['valor2'];
        $valor3 = $_POST['valor3'];

        function verificarCor($valor1, $valor2, $valor3) {
            if ($valor1 > 10) {
                return "blue";
            } elseif ($valor2 < $valor3) {
                return "green";
            } elseif ($valor3 < $valor1 && $valor3 < $valor2) {
                return "red";
            }
        }

        function executarSoma($valor1, $valor2, $valor3) {
            return $valor1 + $valor2 + $valor3;
        }

        $soma = executarSoma($valor1, $valor2, $valor3);
        $cor = verificarCor($valor1, $valor2, $valor3);

        echo "<label style='color: $cor;'>O valor após o cálculo é $soma</label>";
    }
    ?>
</body>
</html>