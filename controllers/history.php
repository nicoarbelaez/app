<?php
    class History extends SessionController{
        function __construct(){
            parent::__construct();
        }

        function render(){
            $path = __CLASS__;
            $this->view->render($path . '/index', $data);
        }

        function getHistoryJSON(){
            header('Content-Type: application/json');
            $id = $this->session->getCurrentUser();
            
            $user = new UserModel();
            $user->get($id);
            $json = $this->model->getHistory($user->getDocument());
            
            echo json_encode($json);
        }
    }
?>