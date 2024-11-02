<?php

class Gol {
    private $tempo;
    private $jogador;
    private $time;
    public function getTempo()
    {
        return $this->tempo;
    }
    public function setTempo($tempo)
    {
        $this->tempo = $tempo;
        return $this;
    }
    public function getJogador()
    {
        return $this->jogador;
    }
    public function setJogador($jogador)
    {
        $this->jogador = $jogador;
        return $this;
    }
    public function getTime()
    {
        return $this->time;
    }
    public function setTime($time)
    {
        $this->time = $time;
        return $this;
    }
}

?>