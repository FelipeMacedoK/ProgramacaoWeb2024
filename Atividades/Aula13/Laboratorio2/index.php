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

    $mae = new \app\model\Pessoa;
    $mae->setNome("Nilceia");
    $mae->setSobreNome("Kaleski Macedo");
    $mae->setDataNascimento(new DateTime("1974-11-17"));
    $mae->setCpfCnpj("123.456.789-11");
    $mae->getTelefone()->setTipo(1);
    $mae->getTelefone()->setNome("Telefone Celular");
    $mae->getTelefone()->setValor("47 984571511");
    $mae->getEndereco()->setLogradouro("Rua Marechal");
    $mae->getEndereco()->setBairro("Jardim América");

    echo $pessoa->getNomeCompleto() . "<br>";
    echo $pessoa->getIdade();

    echo $pessoa;

    //echo retornaNomeCompletoPessoa("Cleber", "Nardelli");

?>