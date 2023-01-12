<?php
    class Home extends SessionController{

        private $commission = 0.5;

        function __construct(){
            parent::__construct();
        }

        function render(){
            $path = __CLASS__;
            $this->view->render($path . '/index');
        }

        function submitTransactionCoin(){

            $coins = array('coin_50' => 0, 'coin_100' => 0, 'coin_200' => 0, 'coin_500' => 0, 'coin_1000' => 0);
            
            if($this->existPOST(array_keys($coins))){

                $value_net = 0;

                foreach($coins as $key => $value){

                    $keyValue = str_replace('coin_', '', $key);
                    $valuePOST = empty($this->getPOST($key)) ? 0 : $this->getPOST($key);
                    // Si esta vacia asigna valor 0
                    $coins[$key] = $valuePOST * intval($keyValue);
                    $value_net += $coins[$key];
                }

                $value_total = $value_net * $this->commission;

                $currentId = $this->session->getCurrentUser();

                $user = new UserModel();
                $user->get($currentId);
                $currentDocument = $user->getDocument();

                $transaction = array(
                    'document_user' => $currentDocument,
                    'value_net' => $value_net,
                    'value_total' => $value_total
                );
                
                if(empty($value_net)){
                    echo $this->message->getMessage(['error', 'EMPTY_FIELDS']);
                    return false;
                }

                
                $transactionModel = new TransactionsModel();

                if($transactionModel->exists($currentDocument)){
                    echo $this->message->getMessage(['warning', 'EXISTING_REQUEST']);
                    return false;
                }
            
                if($transactionModel->save($transaction)){
                    echo $this->message->getMessage(['success', 'SEND_REQUEST']);
                }else{
                    echo $this->message->getMessage(['error', 'REQUEST_NOT_SENT']);
                }

            }else{
                echo $this->message->getMessage(['error', 'POST_NOT_RECEIVED']);
            }
        }
    }
?>