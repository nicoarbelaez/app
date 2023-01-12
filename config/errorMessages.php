<?php
    class ErrorMessages {
        
        private $messagesList = [
            'EMPTY_FIELDS' => 'Los campos estan vacios',
            'REQUEST_RECEIVED' => 'Hubo un error, intente de nuevo mas tarde',
            'REQUEST_NOT_SENT' => 'No se pudo enviar la solicitud, intente de nuevo mas tarde',
        ];

        public $message;

        function __construct($message){
            $this->message = $this->messagesList[$message];
        }

        function geterrorMessages(){ return $this->message; }
    }
?>