<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
</head>
<body>
    <a style="padding: 50px;" href="index.html">Retornar ao Início</a>
    <form method="post">
        <fieldset>
            <legend>Exercício 3</legend>
            <ul>
                <li>
                    <label for="lado">Insira o comprimento do lado do quadrado (em metros):</label>
                    <input id="lado" type="number" name="lado" required step="0.01">
                </li>
            </ul>
            <input type="submit" value="Calcular Área">
            <input type="reset" value="Limpar">
        </fieldset>
    </form>

    <?php
    /*
    3. Crie um programa que calcule a área de um quadrado. Você deve configurar uma
    variável que representa o comprimento dos lados de um quadrado em metros. Após o
    cálculo escrever uma frase com o resultado da operação, exemplo: “A área do
    quadrado de lado 3 metros é 9 metros quadrados”
    */
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $lado = $_POST['lado'];

        function exibeMensagem($mensagem) {
            echo "<p>$mensagem</p>";
        }

        function calcularArea($lado) {
            $area = $lado * $lado;
            return exibeMensagem("A área do quadrado de lado $lado metros é $area metros quadrados");
        }

        calcularArea($lado);
    }
    ?>
</body>
</html>