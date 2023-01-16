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

                if(!$this->verifyTransaction($array)){
                    echo $this->message->getMessage(['error', 'REQUEST_RECEIVED']);
                    return false;
                }

                $transaction = new TransactionsModel();

                if($transaction->delete($array['id'])){
                    echo $this->message->getMessage(['success', 'DELETE_SUCCESSFULLY']);
                    return true;
                }else{
                    echo $this->message->getMessage(['error', 'REQUEST_RECEIVED']);
                }

            }else{
                echo $this->message->getMessage(['error', 'REQUEST_RECEIVED']);
            }
            return false;
        }

        function completedTransaction(){

            if($this->existPOST(['id', 'method_pay', 'document_user'])){

                $array = [
                    'id' => $this->getPOST('id'),
                    'method_pay' => $this->getPOST('method_pay'),
                    'document_user' => $this->getPOST('document_user')
                ];
                
                if(!$this->verifyTransaction($array)){
                    echo $this->message->getMessage(['error', 'REQUEST_RECEIVED']);
                    return false;
                }

                $transaction = new TransactionsModel();
                if($transaction->completed($array)){
                    echo $this->message->getMessage(['success', 'UPDATE_SUCCESSFULLY']);
                    return true;
                }else{
                    echo $this->message->getMessage(['error', 'REQUEST_RECEIVED']);
                }

            }else{
                echo $this->message->getMessage(['error', 'REQUEST_RECEIVED']);
            }
            return false;
        }

        private function verifyTransaction($array){
            $transaction = new TransactionsModel();
            if(!$transaction->verify($array)){
                return false;
            }
            return true;
        }
    }
?>