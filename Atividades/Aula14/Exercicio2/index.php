<?php
    require "time.php";
    require "jogador.php";

    $time = new Time();

    $time->setNome("Unidavi FC");
    $time->setAnoFundacao(2000);

    $jogador = new Jogador();
    $jogador->setNome("Pelé");
    $jogador->setPosicao("M");
    $jogador->setDataNascimento(new DateTime("2000-01-01"));

    $time->addJogador($jogador);
    echo "<pre>";
    print_r($time->getJogadores());
    echo "</pre>";