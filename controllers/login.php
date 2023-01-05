<?php
    class Login extends SessionController{
        function __construct(){
            parent::__construct();
        }

        function render(){
            $path = __CLASS__;
            $this->view->render($path . '/index');
        }

        function authenticate(){

            if($this->existPOST(['user', 'password'])){

                $user = $this->getPOST('user');
                $password = $this->getPOST('password');

                if(empty($user) || empty($password)){
                    echo 'Por favor, ingrese todos los campos';
                    $this->redirect('');
                    return;
                }

                $itemUser = $this->model->login($user, $password);
                // itemUser es un objeto de tipo UserModel

                if($itemUser != NULL){
                    $this->initialize($itemUser);
                }
                else{
                    echo "Contraseña incorrecta o usuario incorrecto";
                    $this->redirect('');
                }

            }else{
                echo "hubo un error";
                $this->redirect('');
            }
        }
    }
?>