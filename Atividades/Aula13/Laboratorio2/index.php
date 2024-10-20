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
    $mae->setCpfCnpj("123.123.123-12");
    $mae->getTelefone()->setTipo(2);
    $mae->getTelefone()->setNome("E-mail");
    $mae->getTelefone()->setValor("nilceia@gmail.com");
    $mae->getEndereco()->setLogradouro("Rua José Belegante");
    $mae->getEndereco()->setBairro("Centro");

    $pai = new \app\model\Pessoa;
    $pai->setNome("Celino");
    $pai->setSobreNome("Macedo");
    $pai->setDataNascimento(new DateTime("1972-08-24"));
    $pai->setCpfCnpj("111.222.333-44");
    $pai->getTelefone()->setTipo(3);
    $pai->getTelefone()->setNome("Telefone Fixo");
    $pai->getTelefone()->setValor("47 35560135");
    $pai->getEndereco()->setLogradouro("Rua José Belegante");
    $pai->getEndereco()->setBairro("Centro");

    echo $felipe->getNomeCompleto() . "<br>";
    echo $felipe->getIdade();
    echo "<br>";
    echo $mae->getNomeCompleto() . "<br>";
    echo $mae->getIdade();
    echo "<br>";    
    echo $pai->getNomeCompleto() . "<br>";
    echo $pai->getIdade();

    //echo retornaNomeCompletoPessoa("Cleber", "Nardelli");

?>