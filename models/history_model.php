<?php
    class HistoryModel extends Model{


        function __construct(){
            parent::__construct();
        }

        function getHistory($document){
            try{
                $query = $this->prepare('SELECT dp_operations.* FROM dp_operations INNER JOIN dp_users ON dp_users.document = dp_operations.document_user WHERE dp_operations.document_user = :document');
                $query->execute(['document' => $document]);
                
                return $query->fetchAll(PDO::FETCH_ASSOC);;
            }catch(PDOException $e){
                error_log('HISTORY_MODEL::GET_HISTORY -> ' . $e->getMessage());
                return NULL;
            }
        }
    }
?>