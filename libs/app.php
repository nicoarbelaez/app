<?php
    include_once 'controllers/notFound.php';
    class App{

        function __construct(){

            $url = isset($_GET['url']) ? $_GET['url'] : '';
            $url = rtrim($url, '/');
            $url = explode('/', $url);

            if(empty($url[0])){

                $fileController = 'controllers/login.php';

                require_once $fileController;
                $controller = new Login();
                $controller->render();
                $controller->loadModel('login');
                return false;
            }
            
            $fileController = 'controllers/' . $url[0] . '.php';

            if(file_exists($fileController)){

                require_once $fileController;
                $controller = new $url[0];
                $controller->loadModel($url[0]);

                if($url[0] == 'logout'){
                    return;
                }

                if(isset($url[1])){

                    if(method_exists($controller, $url[1])){

                        if(isset($url[2])){

                        }else{
                            $controller->{$url[1]}();
                        }

                    }else{
                        $controller = new notFound();
                    }

                }else{
                    $controller->render();
                }
                
            }else{
                $controller = new notFound();
                return;
            }
        }
    }
?>