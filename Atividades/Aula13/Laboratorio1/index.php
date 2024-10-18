<?php

    require_once "pessoa.php";

    $pessoa = new Pessoa();
    $pessoa->setNome("Felipe");
    $pessoa->setSobrenome("Macedo");

    echo $pessoa->getNomeCompleto();

?>