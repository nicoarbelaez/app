<?php
    class View{

        public $data;

        function render($path, $data = []){
            $this->data = $data;

            require "views/{$path}.php";
        }
    }
?>