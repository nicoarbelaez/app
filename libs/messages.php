<?php

    class Messages {

        function getMessage($array){

            $type = $array[0];
            $message = $array[1];
            return $this->showMessage($type, $message);
        }

        private function showMessage($type, $message){
            $typeMessage = $type . 'Messages';
            require_once 'config/' . $typeMessage . '.php';
            
            $keyMessage = new $typeMessage($message);
            return json_encode([
                'type' => $type,
                'message' => $keyMessage->message
            ]);
        }
    }
?>