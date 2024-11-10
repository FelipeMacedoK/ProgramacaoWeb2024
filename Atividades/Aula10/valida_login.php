<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    if ($usuario == 'admin' && $senha == '12345') {
        $_SESSION['usuario'] = $usuario;
        $_SESSION['data_inicio'] = date("Y-m-d H:i:s");
        $_SESSION['ultima_requisicao'] = $_SESSION['data_inicio'];

        setcookie("usuario", $usuario, time() + 60 * 5, "/");
        setcookie("data_inicio", $_SESSION['data_inicio'], time() + 60 * 5, "/");
        
        header("Location: sessao.php");
        exit;
    } else {
        echo "Login ou senha incorretos.<br>";
        echo '<a href="exercicio2.html">Ir para a página de login</a>';
    }
}
