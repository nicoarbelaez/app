<?php
    class SuccessMessages {
        
        private $messagesList = [
            'SEND_REQUEST' => 'Se ha enviado la solicitud correctamente',
            'DELETE_SUCCESSFULLY' => 'Se ha eliminado correctamente',
            'UPDATE_SUCCESSFULLY' => 'Se ha actualizado correctamente',
        ];

        public $message;

        function __construct($message){
            $this->message = $this->messagesList[$message];
        }

        function getsuccessMessages(){ return $this->message; }
    }
?>