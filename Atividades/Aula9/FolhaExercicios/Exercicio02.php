<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
</head>
<body>
    <a style="padding: 50px;" href="index.html">Retornar ao Início</a>
    <form method="post">
        <fieldset>
            <legend>Exercício 2</legend>
            <ul>
                <li>
                    <label for="valor">Insira um valor:</label>
                    <input id="valor" type="number" name="valor" required>
                </li>
            </ul>
            <input type="submit" value="Verificar">
            <input type="reset" value="Limpar">
        </fieldset>
    </form>

    <?php
    /*
    2. Crie um programa para testar se um número é divisível por 2.
    Caso for verdade escrever a frase “Valor divisível por 2”
    Caso for falso escrever a frase “O valor não é divisível por 2”
    */
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valor = $_POST['valor'];

        function exibeMensagem($mensagem) {
            echo "<p>$mensagem</p>";
        }

        function verificarDivisao($valor) {
            if ($valor % 2 == 0) {
                return exibeMensagem("Valor divisível por 2");
            } else {
                return exibeMensagem("O valor não é divisível por 2");
            }
        }

        verificarDivisao($valor);
    }
    ?>
</body>
</html>