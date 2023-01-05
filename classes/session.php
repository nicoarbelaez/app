<?php
    class Session{

        private $sessionName = 'user';
    
        public function __construct(){
            // Si la sesión no está iniciada, la inicia (session_start())
            // Con esto se evita que se inicie la sesión en cada página
            // PHP_SESSION_NONE es una constante que devuelve 1 si la sesión no está iniciada
            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }
        }
    
        public function setCurrentUser($user){
            $_SESSION[$this->sessionName] = $user;
        }
    
        public function getCurrentUser(){
            return $_SESSION[$this->sessionName];
        }
    
        public function closeSession(){
            session_unset();
            session_destroy();
        }
    
        public function exists(){
            return isset($_SESSION[$this->sessionName]);
        }
    }
?>