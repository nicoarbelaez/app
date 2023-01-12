<?php
    class History extends SessionController{
        function __construct(){
            parent::__construct();
        }

        function render(){
            $path = __CLASS__;
            $this->view->render($path . '/index');
        }

        function getHistoryJSON(){
            header('Content-Type: application/json');
            $id = $this->session->getCurrentUser();
            
            $user = new UserModel();
            $user->get($id);
            $transaction = new TransactionsModel();
            $json = $transaction->get($user->getDocument());
            
            echo json_encode($json);
        }
    }
?>