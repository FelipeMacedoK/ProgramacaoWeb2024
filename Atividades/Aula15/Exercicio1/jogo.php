<?php

class Jogo {
    private $timeA;
    private $timeB;
    private $gols;
    public function getTimeA()
    {
        return $this->timeA;
    }
    public function setTimeA($timeA)
    {
        $this->timeA = $timeA;
        return $this;
    }
    public function getTimeB()
    {
        return $this->timeB;
    }
    public function setTimeB($timeB)
    {
        $this->timeB = $timeB;
        return $this;
    }
    public function getGols()
    {
        return $this->gols;
    }
    public function setGols($gols)
    {
        $this->gols = $gols;
        return $this;
    }
    public function addGol($time, $jogador, $tempo) {

    }
    public function getNometimeVencedor() {
        
    }
}

?>