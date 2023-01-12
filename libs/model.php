<?php
    require_once 'libs\imodel.php';
    class Model{

        private $db;

        function __construct(){
            $this->db = new DB;
        }

        function query($query){
            return $this->db->connect()->query($query);
        }

        function prepare($query){
            return $this->db->connect()->prepare($query);
        }
    }
?>