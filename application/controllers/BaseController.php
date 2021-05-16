<?php
class BaseController{
    public static function CreateViewData($viewName, $data){
        require_once './application/views/'.$viewName.'.php';
    }
    public static function CreateView($viewName){
        require_once './application/views/'.$viewName.'.php';
    }

    public static function CreateModel($modelName){
        require_once './application/models/'.$modelName.'.php';
    }
}