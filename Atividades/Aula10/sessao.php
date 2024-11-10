<?php

    session_start();

    if (!isset($_SESSION['usuario']) || !isset($_COOKIE['usuario']) || !isset($_COOKIE['data_inicio'])) {
        echo "<script>alert('Os dados da sessão foram perdidos. Por favor, faça login novamente.');</script>";
        echo '<a href="exercicio2.html">Ir para a página de login</a>';
        exit;
    }

    $_SESSION['ultima_requisicao'] = date("Y-m-d H:i:s");

    $data_inicio = strtotime($_SESSION['data_inicio']);
    $ultima_requisicao = strtotime($_SESSION['ultima_requisicao']);
    $tempo_sessao = gmdate("H:i:s", $ultima_requisicao - $data_inicio);

    echo "Usuário: " . $_COOKIE['usuario'] . "<br>";
    echo "Data/Hora de início da sessão: " . $_COOKIE['data_inicio'] . "<br>";
    echo "Data/Hora da última requisição: " . $_SESSION['ultima_requisicao'] . "<br>";
    echo "Tempo de sessão: " . $tempo_sessao . "<br>";
    echo "Atualize a página!<br>";
    echo '<a href="logout.php">Sair</a>';

?>
