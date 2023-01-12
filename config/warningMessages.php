<?php
    class WarningMessages {
        
        private $messagesList = [
            'EXISTING_REQUEST' => 'Ya hay una solicitud pendiente',
        ];

        public $message;

        function __construct($message){
            $this->message = $this->messagesList[$message];
        }

        function getwarningMessages(){ return $this->message; }
    }
?>