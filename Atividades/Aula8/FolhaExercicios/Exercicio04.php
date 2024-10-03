<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4</title>
</head>
<body>
    <a style="padding: 50px;" href="index.html">Retornar ao Início</a>
    <form method="post">
        <fieldset>
            <legend>Exercício 4</legend>
            <ul>
                <li>
                    <label for="lado">Insira o valor do lado (em metros):</label>
                    <input id="lado" type="number" name="lado" required step="0.01">
                </li>
                <li>
                    <label for="base">Insira o valor da base (em metros):</label>
                    <input id="base" type="number" name="base" required step="0.01">
                </li>
            </ul>
            <input type="submit" value="Calcular Área">
            <input type="reset" value="Limpar">
        </fieldset>
    </form>

    <?php
    /*
    4. Crie um programa que calcule a área de um retângulo. Você deve configurar duas
    variáveis que representam os lados a e b desse quadrado em metros. Após o cálculo
    escrever uma frase com o resultado da operação, exemplo: “A área do retângulo de
    lados 3 e 2 metros é 6 metros quadrados.” Caso a área for maior que 10, escreva a frase
    usando a tag h1, se não, escreva com h3.
    */
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $lado = $_POST['lado'];
        $base = $_POST['base'];

        function exibeMensagem($mensagem) {
            echo $mensagem;
        }

        function calcularArea($lado, $base) {
            $area = $lado * $base;
            if ($area > 10) {
                return exibeMensagem("<h1>A área do retângulo de lados $lado e $base metros é $area metros quadrados.</h1>");
            } else {
                return exibeMensagem("<h3>A área do retângulo de lados $lado e $base metros é $area metros quadrados.</h3>");
            }
        }

        calcularArea($lado, $base);
    }
    ?>
</body>
</html>