<?php
    class SignUp extends SessionController{
        function __construct(){
            parent::__construct();
        }

        function render(){
            $path = __CLASS__;
            $this->view->render('login/' . $path);
        }

        function newUser(){
            $inputs = ['name', 'lastname', 'email', 'phone', 'type-document', 'document', 'password', 'confirm-password'];
            if($this->existPOST($inputs)){

                // Si alguno de los campos esta vacio no se puede crear el usuario
                foreach($inputs as $p){
                    if(empty($this->getPOST($p))){
                        echo "Los campos vacios";
                        $this->redirect('signup');
                        return;
                    }
                }

                $name = ucwords(strtolower($this->getPOST('name')));
                $lastname = ucwords(strtolower($this->getPOST('lastname')));
                $email = $this->getPOST('email');
                $phone = $this->getPOST('phone');
                $typeDocument = $this->getPOST('type-document');
                $document = $this->getPOST('document');
                $password = $this->getPOST('password');
                $confirmPassword = $this->getPOST('confirm-password');

                // Validaciones de los inputs
                if($password != $confirmPassword){
                    echo "La contraseña no son iguales";
                    $this->redirect('signup');
                    return;
                }

                if(strlen($password) < 6){
                    echo "La contraseña debe tener al menos 6 caracteres";
                    $this->redirect('signup');
                    return;
                }

                if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    echo "El email no es valido";
                    $this->redirect('signup');
                    return;
                }

                if(!is_numeric($document) || strlen($document) < 6){
                    echo "El documento no es valido";
                    $this->redirect('signup');
                    return;
                }

                if(!is_numeric($phone) || strlen($phone) < 7){
                    echo "El telefono no es valido";
                    $this->redirect('signup');
                    return;
                }

                // Si algunos de los campos ya existe, no se puede crear el usuario
                $user = new UserModel();
                $inputsExist = ['email', 'document', 'phone'];

                foreach($inputsExist as $input){
                    if($user->exists($this->getPOST($input), $input)){
                        echo "El " . $input . " ya existe";
                        $this->redirect('signup');
                        return;
                    }
                }

                // Si pasa todas las validaciones, se crea el usuario
                $user->setName($name);
                $user->setLastname($lastname);
                $user->setEmail($email);
                $user->setPhone($phone);
                $user->setTypeDocument($typeDocument);
                $user->setDocument($document);
                $user->setPassword($password, true);

                if($user->save()){
                    echo "Usuario creado";
                    $this->redirect('');
                }else{
                    echo "Error al crear el usuario";
                    $this->redirect('signup');
                }


            }else{
                
            }
        }
    }
?>