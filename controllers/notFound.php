<?php
    class notFound extends Controller{
        function __construct(){
            parent::__construct();
            $path = __CLASS__;
            $this->view->render($path . '/index');
        }
    }
?>