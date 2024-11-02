<?php

    class Query {
        private $conexaoBd;
        private $sql;
        private $lastQuery;
        private $quantidadeLinhas;
        public function __construct($bd) {
            $this->conexaoBd = $bd;
        }
        public function setSql($sql) {
            $this->sql = $sql;
        }
        public function getQuantidadeLinhas() {
            return $this->quantidadeLinhas;
        }
        public function Open() {
            $this->lastQuery = pg_query($this->conexaoBd->getInternalConnection(), $this->sql);
            if ($this->lastQuery) {
                $this->quantidadeLinhas = pg_num_rows($this->lastQuery);
                return true;
            }
        }
        public function getNextRow() {
            if($this->lastQuery) {
                return pg_fetch_assoc($this->lastQuery);
            } else {
                throw new Exception ("Não existe query aberta",1);
            }
        }
    }

?>