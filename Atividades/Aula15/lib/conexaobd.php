<?php

class Conexaobd {
    private $host;
    private $porta;
    private $database;
    private $user;
    private $password;
    private $internalConnection;

    public function __construct() {
        //Define a porta padrão do Portgres como inicial
        $this->host = "localhost";
        $this->porta = 5432;
        $this->user = "postgres";
    }
    public function getHost()
    {
        return $this->host;
    }
    public function setHost($host)
    {
        $this->host = $host;
        return $this;
    }
    public function getPorta()
    {
        return $this->porta;
    }
    public function setPorta($porta)
    {
        $this->porta = $porta;
        return $this;
    }
    public function getDatabase()
    {
        return $this->database;
    }
    public function setDatabase($database)
    {
        $this->database = $database;
        return $this;
    }
    public function getUser()
    {
        return $this->user;
    }
    public function setUser($user)
    {
        $this->user = $user;
        return $this;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }
    public function conecta() {
        $this->internalConnection = pg_connect($this->getConnectionString());
    }
    private function getConnectionString(){
        return "host=" . $this->host 
             . " port=" . $this->porta
             . " dbname=" . $this->database
             . " user=" . $this->user
             . " password=" . $this->password;
    }
    public function getInternalConnection() {
        return $this->internalConnection;
    }
}

?>