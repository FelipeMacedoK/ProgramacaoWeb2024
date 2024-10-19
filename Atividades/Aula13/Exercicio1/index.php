<?php

    require_once "model\\pessoa.php";
    require_once "model\\contato.php";
    require_once "model\\endereco.php";

    $felipe = new \app\model\Pessoa;
    $felipe->setNome("Felipe");
    $felipe->setSobreNome("Macedo");
    $felipe->setDataNascimento(new DateTime("1999-07-05"));
    $felipe->setCpfCnpj("123.456.789-11");
    $felipe->getTelefone()->setTipo(1);
    $felipe->getTelefone()->setNome("Telefone Celular");
    $felipe->getTelefone()->setValor("47 984571511");
    $felipe->getEndereco()->setLogradouro("Rua Marechal");
    $felipe->getEndereco()->setBairro("Jardim América");

    echo $felipe->getNomeCompleto() . "<br>";
    echo $felipe->getIdade();
    echo "<br>";

?>