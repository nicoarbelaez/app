<?php
    error_reporting(E_ALL);
    ini_set('ignore_repeated_errors', TRUE);
    ini_set('display_errors', FALSE);
    ini_set('log_errors', TRUE);
    ini_set("error_log", "php-error.log");

    require_once 'config/config.php';

    require_once 'libs/database.php';
    require_once 'libs/controller.php';
    
    require_once 'libs/model.php';
    require_once 'libs/messages.php';
    require_once 'libs/view.php';
    require_once 'libs/app.php';
    
    include_once 'controllers/notFound.php';
    
    require_once 'models/user_model.php';
    include_once 'models/transactions_model.php';
    
    require_once 'classes/session_controller.php';
    require_once 'classes/session.php';

    $app = new App();
    // config/access...(nombre del sitio)
    // contrrollers/...(nombre de la clase)
    // models/...(nombre de la clase)
    // view/...(nombre de la carpeta)
    // header(nombre del href)
?>