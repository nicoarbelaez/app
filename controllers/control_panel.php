<?php
    class Control_Panel extends SessionController{
        function __construct(){
            parent::__construct();
        }

        function render(){
            $path = __CLASS__;
            $this->view->render($path . '/index');
        }
    }
?>