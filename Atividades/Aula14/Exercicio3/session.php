<?php
    require_once "usuario.php";
    class session {
        private $sessionid;
        private $status;
        private $usuario;
        private $dataHoraInicio;
        private $dataHoraUltimoAcesso;
        public function __construct() {
            $this->inicializaInstancia();
        }
        private function inicializaInstancia(){
            if(session_start()) {
                $this->sessioId = session_id();
                if(isset($_SESSION['start'])){
                    $this->dataHoraInicio = $_SESSION['start'];
                    $this->setStatus('Sessão reiniciada');
                } else {
                    $this->dataHoraInicio = time();
                    $_SESSION['start'] = this->getDataHoraInicio;
                    $this->setStatus('Sessão iniciada');
                }
            } else {
                throw new Exception ('Falhou ao inicializar sessão', 1);
            }
        }
        public function getSessionid()
        {
                return $this->sessionid;
        }
        public function setSessionid($sessionid)
        {
                $this->sessionid = $sessionid;
                return $this;
        }
        public function getStatus()
        {
                return $this->status;
        }
        public function setStatus($status)
        {
                $this->status = $status;
                return $this;
        }
        public function getUsuario()
        {
                return $this->usuario;
        }
        public function setUsuario($usuario)
        {
                $this->usuario = $usuario;
                return $this;
        }
        public function getDataHoraInicio()
        {
                return $this->dataHoraInicio;
        }

        public function setDataHoraInicio($dataHoraInicio)
        {
                $this->dataHoraInicio = $dataHoraInicio;
                return $this;
        }
        public function getDataHoraUltimoAcesso()
        {
                return $this->dataHoraUltimoAcesso;
        }
        public function setDataHoraUltimoAcesso($dataHoraUltimoAcesso)
        {
                $this->dataHoraUltimoAcesso = $dataHoraUltimoAcesso;
                return $this;
        }
        public function iniciaSessao() {
            session_start();
            if (isset($_SESSION['usuario'])) {
                echo "Sessão iniciada. Usuário logado: ";
            }
        }
        public function finalizaSessao() {

        }
        public function getUsuarioSessao() {

        }
    }

?>