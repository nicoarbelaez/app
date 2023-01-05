<?php
    class DB{

        private $host;
        private $user;
        private $password;
        private $database;
        private $charset;

        function __construct(){

            $this->host = constant('DB_HOST');
            $this->user = constant('DB_USER');
            $this->password = constant('DB_PASSWORD');
            $this->database = constant('DB_DATABASE');
            $this->charset = constant('DB_CHARSET');
        }

        function connect(){
            try{
                $connection = 'mysql:host=' . $this->host . ';dbname=' . $this->database . ';charset=' . $this->charset;
                $options = [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_EMULATE_PREPARES => false
                ];

                $pdo = new PDO($connection, $this->user, $this->password, $options);
                return $pdo;
            }catch(PDOException $e){
                error_log("DB::CONNECT -> {$e->getMessage()}");
            }
        }
    }
?>