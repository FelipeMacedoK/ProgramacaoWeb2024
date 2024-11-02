<?php
    require "time.php";
    require "jogador.php";
    require "jogo.php";
    require "gol.php";

    $timeA = new Time();
    $timeA->setNome("Professores - Unidavi FC");
    $timeA->setAnoFundacao(2000);

    $timeB = new Time();
    $timeB->setNome("Alunos - Unidavi FC");
    $timeB->setAnoFundacao(2005);

    $jogador1 = new Jogador();
    $jogador1->setNome("Pelé");
    $jogador1->setPosicao("M");
    $jogador1->setDataNascimento(new DateTime("2000-01-01"));

    $jogador2 = new Jogador();
    $jogador2->setNome("Romário");
    $jogador2->setPosicao("A");
    $jogador2->setDataNascimento(new DateTime("2000-02-02"));

    $jogador3 = new Jogador();
    $jogador3->setNome("Cafu");
    $jogador3->setPosicao("D");
    $jogador3->setDataNascimento(new DateTime("2000-03-03"));

    $jogador4 = new Jogador();
    $jogador4->setNome("Felipe");
    $jogador4->setPosicao("D");
    $jogador4->setDataNascimento(new DateTime("2000-04-04"));

    $jogador5 = new Jogador();
    $jogador5->setNome("Guilherme");
    $jogador5->setPosicao("A");
    $jogador5->setDataNascimento(new DateTime("2000-05-05"));

    $jogador6 = new Jogador();
    $jogador6->setNome("Caio");
    $jogador6->setPosicao("M");
    $jogador6->setDataNascimento(new DateTime("2000-06-06"));

    $timeA->addJogador($jogador1);
    $timeA->addJogador($jogador2);
    $timeA->addJogador($jogador3);
    $timeB->addJogador($jogador4);
    $timeB->addJogador($jogador5);
    $timeB->addJogador($jogador6);

    $jogo = new Jogo();
    $jogo->setTimeA($timeA);
    $jogo->setTimeB($timeB);

    /*$gol1 = new Gol();
    $gol1->setTempo(25);
    $gol1->setJogador($jogador1);
    $gol1->setTime($timeA);

    $gol2 = new Gol();
    $gol2->setTempo(54);
    $gol2->setJogador($jogador3);
    $gol2->setTime($timeA);

    $gol3 = new Gol();
    $gol3->setTempo(88);
    $gol3->setJogador($jogador5);
    $gol3->setTime($timeB);
    */
    $jogo->getNomeTimeVencedor();
?>