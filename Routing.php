<?php

require_once 'src/controllers/DefaultController.php';
require_once 'src/controllers/SecurityController.php';
require_once 'src/controllers/BookController.php';
require_once 'src/controllers/CoverController.php';

class Routing
{

    public static $routes;

    public static function get($url, $controller)
    {
        self::$routes[$url] = $controller;
    }

    public static function post($url, $controller)
    {
        self::$routes[$url] = $controller;
    }

    public static function run($url)
    {
        $action = explode("/", $url)[0];

        if (!array_key_exists($action, self::$routes)) {
            $appController = new AppController();
            $appController->displayError('Wrong url! This url does not exist');
            return;
        }

        $controller = self::$routes[$action];
        $object = new $controller;
        $action = $action ?: 'login';

        $object->$action();
    }

}

?>