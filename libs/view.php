<?php
    class View{
        function __construct(){
        }

        function render($path, $data = []){
            require "views/{$path}.php";
        }
    }
?>