<?php

final class App
{
    private static $instances = [];

    /**
     * Resolves and dispatch controller/action
     */
    public static function start()
    {
        $pathInfo = Request::pathInfo();

        $pathInfo = trim($pathInfo, '/');
        $pathParts = explode('/', $pathInfo);

        //resolve controller
        if(!isset($pathParts[0]) || empty($pathParts[0])) {
            $controller = 'Index';
        } else {
            $controller = ucfirst(strtolower($pathParts[0]));
        }

        $controller .= 'Controller';

        //resolve action
        if(!isset($pathParts[1]) || empty($pathParts[1])) {
            $action = 'index';
        } else {
            $action = strtolower($pathParts[1]);
        }

        //var_dump($controller);
        //var_dump($action);

        //dispatch
        if(class_exists($controller) && method_exists($controller, $action)) {
            $controllerInstance = new $controller();
            $controllerInstance->$action();
        } else {
            header("HTTP/1.0 404 Not Found");
        }
    }

    /**
     * Loads app config
     * @return array
     */
    public static function config()
    {
        return include BP . 'app/config.php';
    }

}
