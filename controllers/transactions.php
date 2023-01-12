<?php
    class Transactions extends SessionController{
        function __construct(){
            parent::__construct();
        }

        function render(){
            $path = __CLASS__;
            $this->view->render($path . '/index');
        }
        // Transaccion
        function getTransactionsJSON(){
            if($this->existPOST(['search'])){
                $search = $this->getPOST('search');
                header('Content-Type: application/json');
                $transactions = $this->model->getAll($search);
                echo json_encode($transactions);
                return;
            }
            header('Content-Type: application/json');
            $transactions = $this->model->getAll();
            echo json_encode($transactions);
        }
    }
?>