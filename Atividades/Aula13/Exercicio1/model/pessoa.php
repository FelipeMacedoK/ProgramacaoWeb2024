<?php 
    namespace app\model;

    class Pessoa {
        private $nome;
        private $sobreNome;
        private $dataNascimento;
        private $cpfCnpj;
        private $tipo;
        private $telefone;
        private $endereco;

        public function __construct()
        {
            $this->iniciaInstancia();
        }
        private function iniciaInstancia() {
            $this->nome = "vazio";
            $this->sobreNome = "vazio";
            $this->telefone = new Contato();
            $this->endereco = new Endereco(); 
        }    
        public function setNome($nome) {
            $this->nome = $nome;
        }
        public function setSobreNome($sobreNome) {
            $this->sobreNome = $sobreNome;
        }
        public function getNomeCompleto() {
            return $this->nome . " " . $this->sobreNome;
        }
        public function getIdade() {
            if(isset($this->dataNascimento)) {
                $idade = $this->dataNascimento->diff( new \DateTime( date('Y-m-d') ) );
                return $idade->y; 
            }
            return false;    
        }
        public function __toString()
        {
            return $this->nome;
        }
        public function getDataNascimento()
        {
            return $this->dataNascimento;
        }
        public function setDataNascimento($dataNascimento)
        {
            $this->dataNascimento = $dataNascimento;
        }
        public function getCpfCnpj()
        {
            return $this->cpfCnpj;
        }
        public function setCpfCnpj($cpfCnpj)
        {
            $this->cpfCnpj = $cpfCnpj;
        }
        public function getTipo() {
            return $this->tipo;
        }
        public function setTipo($tipo) {
            $this->tipo = $tipo;
        }
        public function getTelefone() {
            return $this->telefone;
        }
        public function setTelefone($telefone) {
            $this->telefone = $telefone;
        }
        public function getEndereco() {
            return $this->endereco;
        }
        public function setEndereco($endereco) {
            $this->endereco = $endereco;
        }
    }
?>