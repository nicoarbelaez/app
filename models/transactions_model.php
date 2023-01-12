<?php
    class TransactionsModel extends Model{


        function __construct(){
            parent::__construct();
        }

        function save($data){
            try{
                $query = $this->prepare('INSERT INTO dp_operations (document_user, value_net, value_total, method_pay, completed) VALUES (:document_user, :value_net, :value_total, NULL, 0)');

                if($this->exists($data['document_user'])){
                    return false;
                }

                $query->execute([
                    'document_user' => $data['document_user'],
                    'value_net' => $data['value_net'],
                    'value_total' => $data['value_total'],
                ]);
                return true;
            }catch(PDOException $e){
                error_log('TRANSACTIONS_MODEL::SAVE -> ' . $e->getMessage());
                return false;
            }
        }

        private function exists($document){
            try{
                $query = $this->prepare('SELECT dp_operations.* FROM dp_operations INNER JOIN dp_users ON dp_users.document = dp_operations.document_user WHERE dp_operations.document_user = :document AND completed = 0');
                $query->execute(['document' => $document]);
                
                if($query->rowCount() == 0){
                    return false;
                }

                return true;
            }catch(PDOException $e){
                error_log('TRANSACTIONS_MODEL::EXISTS -> ' . $e->getMessage());
                return false;
            }
        }

        function get($document){
            try{
                $query = $this->prepare('SELECT dp_operations.* FROM dp_operations INNER JOIN dp_users ON dp_users.document = dp_operations.document_user WHERE dp_operations.document_user = :document AND completed != 0');
                $query->execute(['document' => $document]);
                
                return $query->fetchAll(PDO::FETCH_ASSOC);
            }catch(PDOException $e){
                error_log('TRANSACTIONS_MODEL::GET -> ' . $e->getMessage());
                return NULL;
            }
        }

        function getAll($search = ''){
            $search = '%' . $search . '%';
            try{
                $sql = 'SELECT dp_operations.* FROM dp_operations INNER JOIN dp_users ON dp_users.document = dp_operations.document_user WHERE completed != 0 AND document_user LIKE :search';

                $query = $this->prepare($sql);
                $query->execute(['search' => $search]);
                
                return $query->fetchAll(PDO::FETCH_ASSOC);
            }catch(PDOException $e){
                error_log('TRANSACTIONS_MODEL::GETALL -> ' . $e->getMessage());
                return NULL;
            }
        }

        function getUncompleted(){
            try{
                $query = $this->query('SELECT dp_operations.* FROM dp_operations INNER JOIN dp_users ON dp_users.document = dp_operations.document_user WHERE completed = 0');
                return $query->fetchAll(PDO::FETCH_ASSOC);
            }catch(PDOException $e){
                error_log('TRANSACTIONS_MODEL::GETUNCOMPLETED -> ' . $e->getMessage());
                return NULL;
            }
        }

        function delete($id){
            try{
                $query = $this->prepare('DELETE FROM dp_operations WHERE id = :id');
                $query->execute(['id' => $id]);
                return true;
            }catch(PDOException $e){
                error_log('TRANSACTIONS_MODEL::DELETE -> ' . $e->getMessage());
                return false;
            }
        }

        function completed($data){
            try{
                $query = $this->prepare('UPDATE dp_operations SET method_pay = :method_pay, completed = 1 WHERE id = :id');
                $query->execute([
                    'method_pay' => $data['method_pay'],
                    'id' => $data['id']
                ]);
                return true;
            }catch(PDOException $e){
                error_log('TRANSACTIONS_MODEL::COMPLETED -> ' . $e->getMessage());
                return false;
            }
        }

        function verify($data){
            try{
                $query = $this->prepare('SELECT * FROM dp_operations WHERE document_user = :document_user AND id = :id AND completed = 0');
                $query->execute([
                    'document_user' => $data['document_user'],
                    'id' => $data['id']
                ]);

                if($query->rowCount() == 0){
                    return false;
                }
                
                return true;
            }catch(PDOException $e){
                error_log('TRANSACTIONS_MODEL::VERIFY -> ' . $e->getMessage());
                return false;
            }
        }
    }
?>