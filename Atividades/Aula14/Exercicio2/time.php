<?php
    class Time {
        private $nome;
        private $anoFundacao;
        private $jogadores;
        public function __construct() {
            $this->jogadores = Array();
        }
        public function getNome()
        {
                return $this->nome;
        }
        public function setNome($nome)
        {
                $this->nome = $nome;
                return $this;
        }
        public function getAnoFundacao()
        {
                return $this->anoFundacao;
        }
        public function setAnoFundacao($anoFundacao)
        {
                $this->anoFundacao = $anoFundacao;
                return $this;
        }
        public function addJogador($jogador) {
            array_push($this->jogadores, $jogador);
        }
        public function getJogadores() {
            return $this->jogadores;
        }
    }