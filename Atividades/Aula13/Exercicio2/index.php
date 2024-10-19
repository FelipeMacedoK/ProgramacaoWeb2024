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

    $familia = [
        'felipe' => $felipe,
        'pai' => $pai,
        'mae' => $mae
    ];

    $conteudo = "";

    foreach ($familia as $chave => $pessoa) {
        $conteudo .= "Nome Completo: " . $pessoa->getNomeCompleto() . "\n";
        $conteudo .= "Idade: " . $pessoa->getIdade() . " anos\n";
        $conteudo .= "CPF/CNPJ: " . $pessoa->getCpfCnpj() . "\n";
        $conteudo .= "Telefone: " . $pessoa->getTelefone()->getNome() . " - " . $pessoa->getTelefone()->getValor() . "\n";
        $conteudo .= "Endereço: " . $pessoa->getEndereco()->getLogradouro() . ", Bairro: " . $pessoa->getEndereco()->getBairro() . "\n";
        $conteudo .= "---------------------------------------\n";
    }

    $arquivo = 'familia.txt';
    file_put_contents($arquivo, $conteudo);
    echo "Dados salvos no arquivo 'familia.txt' com sucesso!";
    
?>