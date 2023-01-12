<?php
    class f297a57a5a743894a0e4a801fc3 extends SessionController{
        function __construct(){
            parent::__construct();
        }

        function render(){
            $path = __CLASS__;
            $this->view->render($path . '/index');
        }

        function getUncompletedTransactions(){
            header('Content-Type: application/json');
            $transaction = new TransactionsModel();
            $json = $transaction->getUncompleted();
            echo json_encode($json);
        }

        function deleteTransaction(){

            if($this->existPOST(['id', 'document_user'])){

                $array = [
                    'id' => $this->getPOST('id'),
                    'document_user' => $this->getPOST('document_user')
                ];

                if(!$this->verifyTransaction($array)){ return false; }

                $transaction = new TransactionsModel();
                $transaction->delete($array['id']);
                return true;
            }else{
                echo "Error: No se recibieron los datos necesarios";
                return false;
            }
        }

        function completedTransaction(){

            if($this->existPOST(['id', 'method_pay', 'document_user'])){

                $array = [
                    'id' => $this->getPOST('id'),
                    'method_pay' => $this->getPOST('method_pay'),
                    'document_user' => $this->getPOST('document_user')
                ];

                if(!$this->verifyTransaction($array)){ return false; }

                $transaction = new TransactionsModel();
                $transaction->completed($array);
                return true;
            }else{
                echo "Error: No se recibieron los datos necesarios";
                return false;
            }
        }

        private function verifyTransaction($array){
            $transaction = new TransactionsModel();
            if(!$transaction->verify($array)){
                echo "El usuario no tiene una transacción pendiente o no coincide los datos";
                return false;
            }
            return true;
        }
    }
?>