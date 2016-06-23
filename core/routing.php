<?php

class Routing {

    static function execute() {

        $controllerName = 'main';
        $actionName = 'index';
        $piecesOfUrl = explode('/', $_SERVER['REQUEST_URI']);
        
        if (!empty($piecesOfUrl[1])) {
            $controllerName = $piecesOfUrl[1];
        }

        if (!empty($piecesOfUrl[2])) {
            $actionName = $piecesOfUrl[2];
        }

        $modelName = 'Model_' . $controllerName;
        $controllerName = 'Controller_' . $controllerName;
        $actionName = 'action_' . $actionName;

        $fileWithModel = strtolower($modelName) . '.php';
        $fileWithModelPath = 'models/' . $fileWithModel;
        if (file_exists($fileWithModelPath)) {
            require_once $fileWithModel;
        }

        $fileWithController = strtolower($controllerName) . '.php';
        $fileWithControllerPath = 'controllers/' . $fileWithController;
        if (file_exists($fileWithControllerPath)) {
            require_once $fileWithControllerPath;
        } else {
            echo 'ERROR! Контроллер не найден.';
        }
        
        $controller = New $controllerName;
        $action = $actionName;
        if (method_exists($controller, $action)) {
            call_user_func(array($controller, $action), $piecesOfUrl);
        } else {
            echo 'ERROR! call_user_func Не отработала.';
        }

    }
}