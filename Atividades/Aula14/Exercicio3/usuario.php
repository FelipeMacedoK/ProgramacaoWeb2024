<?php
    class usuario {
        private $username;
        private $userlogin;
        private $userpass;
        public function getUsername()
        {
                return $this->username;
        }
        public function setUsername($username)
        {
                $this->username = $username;
                return $this;
        }
        public function getUserlogin()
        {
                return $this->userlogin;
        }
        public function setUserlogin($userlogin)
        {
                $this->userlogin = $userlogin;
                return $this;
        }
        public function getUserpass()
        {
                return $this->userpass;
        } 
        public function setUserpass($userpass)
        {
                $this->userpass = $userpass;
                return $this;
        }
    }