<?php
    class Calculadora {
        private $operador1;
        private $operador2;
        private $operando;
        public function getOperador1()
        {
                return $this->operador1;
        }
        public function setOperador1($operador1)
        {
                $this->operador1 = $operador1;
                return $this;
        }
        public function getOperador2()
        {
                return $this->operador2;
        }
        public function setOperador2($operador2)
        {
                $this->operador2 = $operador2;
                return $this;
        }
        public function somar() {
            echo $this->operador1+$this->operador2;
        }
        public function subtrair() {
            echo $this->operador1-$this->operador2;
        }
        public function multiplicar() {
            echo $this->operador1*$this->operador2;
        }
        public function dividir() {
            echo $this->operador1/$this->operador2;
        }
    }