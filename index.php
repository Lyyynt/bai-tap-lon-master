<?php
    session_start(); 
    define("IN_SITE", true);
    include_once ('./libs/session.php');
    include_once ('./libs/role.php');
    include_once ('./libs/helper.php');
    include_once ('./libs/Database.php');
    include_once ('./application/models/BaseModel.php');
    include_once ('./application/controllers/BaseController.php');
    
    $controller = isset($_REQUEST['c'])? $_REQUEST['c'] : '';
    $action = isset($_REQUEST['a'])? $_REQUEST['a'] : '';

    
    if (empty($controller) || empty($action)){
        $controller = 'home';
        $action = 'home';
    }
    $controllerName= ucfirst(strtolower($controller).'Controller');
    $actioneName= strtolower($action);
    include_once ("./application/controllers/${controllerName}.php");

    $controllerObject= new $controllerName;

    $controllerObject->$actioneName();