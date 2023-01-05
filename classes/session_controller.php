<?php
    class SessionController extends Controller{
        private $sites;
        private $sitesDefault;

        function __construct(){
            parent::__construct();
            $this->init();
        }
        
        private function init(){
            $json = $this->getJSONFileConfig();
            
            $this->session = new Session();
            $this->sites = $json['sites'];
            $this->sitesDefault = $json['sites-default'];
            $this->validateSession();
        }

        function initialize($user){
            $this->session->setCurrentUser($user->getId());
            $roleCurrentUser = $user->getRole();
            // Redirecciona al default del rol
            $this->redirect($this->sitesDefault[$roleCurrentUser]);
        }
        
        private function getJSONFileConfig(){
            $jsonConfig = file_get_contents('config/access.json');
            $json = json_decode($jsonConfig, true);
            // Decodifica el json y lo convierte en un array asociativo
            // El segundo parámetro es para que lo convierta en un array asociativo
            // Si no se pone, lo convierte en un array normal
            // El array asociativo es un array que tiene como índice un string. Ejemplo: $array['nombre'] = 'Juan';
            // El array normal es un array que tiene como índice un número. Ejemplo: $array[0] = 'Juan';
            return $json;
        }

        function validateSession(){

            if($this->existsSession()){
                $roleUser = $this->getCurrentDataUser()->getRole();
                error_log('SESSION_CONTROLLER::VALIDATE_SESSION -> roleUser: ' . $roleUser);

                if($this->isPublicSite() || !$this->isAuthorizedSite()){
                    
                    $this->redirect($this->sitesDefault[$roleUser]);

                }

            }else if(!$this->isPublicSite()){
                header('Location: ' . constant('URL'));
            }
        }

        function existsSession(){
            if($this->session->exists() && $this->session->getCurrentUser() != null){
                return true;
            }
            return false;
        }

        private function isAuthorizedSite(){
            $currentURL = $this->getCurrentURL();
            $roleUser = $this->getCurrentDataUser()->getRole();
            for($i = 0; $i < sizeof($this->sites); $i++){
                if($this->sites[$i]['site'] === $currentURL && $this->sites[$i]['role'] === $roleUser){
                    return true;
                }
            }
            return false;
        }

        private function isPublicSite(){
            $currentURL = $this->getCurrentURL();
            for($i = 0; $i < sizeof($this->sites); $i++){
                if($this->sites[$i]['site'] === $currentURL && $this->sites[$i]['access'] === 'public'){
                    return true;
                }
            }
            return false;
        }

        function getCurrentURL(){
            $url = $_SERVER['REQUEST_URI'];
            $url = explode('/', $url);
            $url = $url[count($url) - 1];
            return $url;
        }

        function getCurrentDataUser(){
            $id = $this->session->getCurrentUser();
            error_log('SESSION_CONTROLLER::GET_CURRENT_DATA_USER -> id: ' . $id);
            $userObject = new UserModel();
            $userObject->get($id);
            return $userObject;
        }

        function logout(){
            $this->session->closeSession();
        }
    }
?>