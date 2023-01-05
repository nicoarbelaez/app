<?php
    class LoginModel extends Model{
        function __construct(){
            parent::__construct();
        }

        function login($user, $password){
            try{
                $query = $this->prepare('SELECT * FROM dp_users WHERE email = :email OR document = :document');
                $query->execute([
                    'email' => $user,
                    'document' => $user
                ]);

                if($query->rowCount() == 1){
                    // Se guarda la información del usuario en una variable
                    $item = $query->fetch(PDO::FETCH_ASSOC); 

                    $user = new UserModel();
                    $user->from($item);
                    
                    if(password_verify($password, $user->getPassword())){
                        // error_log('LOGIN_MODEL::LOGIN -> ' . $user->getId());
                        return $user;
                    }
                    
                }
                return NULL;
            }catch(PDOException $e){
                error_log('LOGIN_MODEL::LOGIN -> ' . $e->getMessage());
                return NULL;
            }
        }
    }
?>