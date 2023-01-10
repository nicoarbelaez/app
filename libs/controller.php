<?php
    class Controller{

        public $view;
        public $model;

        function __construct(){
            $this->view = new View();
        }

        function loadModel($name){
            $url = 'models/' . $name . '_model.php';

            if(file_exists($url)){
                require_once $url;

                $nameModel = $name . 'Model';
                $this->model = new $nameModel();
            }
        }

        function existPOST($params){
            foreach($params as $item){
                if(!isset($_POST[$item])){
                    error_log('CONTROLLER::EXIST_POST -> no existe el post de ' . $item);
                    return false;
                }
            }
            return true;
        }

        function existGET($params){
            foreach($params as $item){
                if(!isset($_GET[$item])){
                    error_log('CONTROLLER::EXIST_GET -> no existe el get de ' . $item);
                    return false;
                }
            }
            return true;
        }

        function getPOST($name){
            return $_POST[$name];
        }

        function getGET($name){
            return $_GET[$name];
        }

        function redirect($path){
            header('location: ' . constant('URL') . $path);
        }
    }
?>