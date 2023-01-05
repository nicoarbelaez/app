<?php
    class UserModel extends Model implements iModel{

        private $id;
        private $name;
        private $lastname;
        private $typeDocument;
        private $document;
        private $email;
        private $phone;
        private $role;
        private $password;

        function __construct(){
            parent::__construct();

            $this->id = '';
            $this->name = '';
            $this->lastname = '';
            $this->typeDocument = '';
            $this->document = '';
            $this->email = '';
            $this->phone = '';
            $this->role = 'user';
            $this->password = '';
        }

        function save(){
            try{
                $query = $this->prepare('INSERT INTO dp_users (id, name, lastname, type_document, document, email, phone, role, password) VALUES (UUID(), :name, :lastname, :type_document, :document, :email, :phone, :role, :password)');
                $query->execute([
                    'name' => $this->name,
                    'lastname' => $this->lastname,
                    'type_document' => $this->typeDocument,
                    'document' => $this->document,
                    'email' => $this->email,
                    'phone' => $this->phone,
                    'role' => $this->role,
                    'password' => $this->password
                ]);
                return true;
            }catch(PDOException $e){
                error_log('USER_MODEL::SAVE -> ' . $e->getMessage());
                return false;
            }
        }

        function get($id){
            try{
                $query = $this->prepare('SELECT * FROM dp_users WHERE id = :id');
                $query->execute(['id' => $id]);

                $userObjet = $query->fetch(PDO::FETCH_ASSOC);

                $this->from($userObjet);

                return true;
            }catch(PDOException $e){
                error_log('USER_MODEL::GET -> ' . $e->getMessage());
                return false;
            }
        }

        function exists($item, $column = ''){
            try{
                $sql = 'SELECT ' . $column . ' FROM dp_users WHERE ' . $column . '= :' . $column;
                $query = $this->prepare($sql);
                $query->execute([ $column => $item ]);

                if($query->rowCount() > 0){
                    return true;
                }

                return false;
            }catch(PDOException $e){
                error_log('USER_MODEL::EXISTS -> ' . $e->getMessage());
                return false;
            }
        }

        function from($array){
            $this->id = $array['id'];
            $this->name = $array['name'];
            $this->lastname = $array['lastname'];
            $this->typeDocument = $array['type_document'];
            $this->document = $array['document'];
            $this->email = $array['email'];
            $this->phone = $array['phone'];
            $this->role = $array['role'];
            $this->password = $array['password'];
        }

        private function getHashedPassword($password){
            return password_hash($password, PASSWORD_DEFAULT, ['cost' => 12]);
        }

        function setName($name){ $this->name = $name; }
        function setLastname($lastname){ $this->lastname = $lastname; }
        function setTypeDocument($typeDocument){ $this->typeDocument = $typeDocument; }
        function setDocument($document){ $this->document = $document; }
        function setEmail($email){ $this->email = $email; }
        function setPhone($phone){ $this->phone = $phone; }
        function setPassword($password, $hash = true){
            if($hash){
                $this->password = $this->getHashedPassword($password);
            }else{
                $this->password = $password;
            }
        }

        function getId(){ return $this->id; }
        function getName(){ return $this->name; }
        function getLastname(){ return $this->lastname; }
        function getTypeDocument(){ return $this->typeDocument; }
        function getDocument(){ return $this->document; }
        function getEmail(){ return $this->email; }
        function getPhone(){ return $this->phone; }
        function getRole(){ return $this->role; }
        function getPassword(){ return $this->password; }
    }
?>