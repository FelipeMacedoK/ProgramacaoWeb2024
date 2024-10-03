<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 10</title>
</head>
<body>
    <a style="padding: 50px;" href="index.html">Retornar ao Início</a>
    <form method="post">
        <fieldset>
            <legend>Exercício 10</legend>
            <p>Pressione o botão abaixo para gerar a árvore.</p>
            <input type="submit" value="Gerar Árvore">
        </fieldset>
    </form>

    <?php
    /*
    10. Dado o Array abaixo, pede-se para recursivamente criar a árvore ao lado:
    */

    $pastas = array(
        "bsn" => array(
            "3a Fase" => array(
                "desenvWeb",
                "bancoDados 1",
                "engSoft 1"
            ),
            "4a Fase" => array(
                "Intro Web",
                "bancoDados 2",
                "engSoft 2"
            )
        )
    );

    function criaArvore($aPasta, $nivel = 1) {
        foreach ($aPasta as $chave => $valor) {
            if (is_numeric($chave)) {
                echo str_repeat(" - ", $nivel) . $valor . "<br>";
            } else {
                echo str_repeat(" - ", $nivel) . $chave . "<br>";
            }
            if (is_array($valor)) {
                criaArvore($valor, $nivel + 1);
            }
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<h2>Estrutura da Árvore:</h2>";
        criaArvore($pastas);
    }
    ?>
</body>
</html>