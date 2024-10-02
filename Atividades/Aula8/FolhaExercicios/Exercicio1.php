<DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 1</title>
</head>
<body>
    <a style="padding: 50px;" href="index.html">Retornar ao Inicio</a>
<form method="post">
    <fieldset>
        <legend>Exercicio 1</legend>
        <ul>
            <li>
                <label for="valor1">Valor 1:</label>
                <input id="valor1" type="integer" name="valor1" required>
            </li>
            <li>
                <label for="valor2">Valor 2:</label>
                <input id="valor2" type="integer" name="valor2" required>
            </li>
            <li>
                <label for="valor3">Valor 3:</label>
                <input id="valor3" type="integer" name="valor3" required>
            </li>
        </ul>
        <input type="submit" value="Enviar">
        <input type="reset" value="Limpar">
    </fieldset>
    </form>
</body>
</html>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$valor1 = $_POST['valor1'];
$valor2 = $_POST['valor2'];
$valor3 = $_POST['valor3'];

function verificarCor($valor1,$valor2,$valor3) {
    if ($valor1 > 10) {
        return "blue";
    }
    else if ($valor2 < $valor3) {
        return "green";
    }
    else if ($valor3 < $valor1 && $valor3 < $valor2) {
        return "red";
    }
}

function executarSoma($valor1,$valor2,$valor3) {
    return $valor1 + $valor2 + $valor3;
}

$soma = executarSoma($valor1, $valor2, $valor3);
$cor = verificarCor($valor1, $valor2, $valor3);

echo "<label style='color: $cor;'>O valor após o cálculo é " . $soma . "</label>";
}

?>