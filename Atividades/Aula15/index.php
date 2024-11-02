<?php

    require_once "lib/conexaobd.php";
    require_once "lib/query.php";

    $bd = new Conexaobd();
    $bd->setHost("localhost");
    $bd->setPorta(5432);
    $bd->setDatabase("postgres");
    $bd->setUser("postgres");
    $bd->setPassword("postgres");
    if(!$bd->conecta()) {
        echo "Erro de Conexão";
    } else {
        $query = new Query ($bd);
        $query->setSql("SELECT 1 AS COLUNA");
        echo "Conectado com Sucesso";
    }

?>