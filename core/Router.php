<?php

class Router
{
    private $url;
    private $post;

    /**
     * Router constructor.
     * @param $url
     * @param $post
     */
    public function __construct($url, $post)
    {
        $this->url = $url;
        $this->post = $post;
    }

    public function route()
    {
        $urlParts = explode("/", $this->url);

        $controllerName = $urlParts[1] . "Controller";
        $actionName = $urlParts[2] . "Action";

        $controllerPath = "./controllers/" . $controllerName . ".php";

        if (file_exists($controllerPath) == false) {
            header('Location: ./views/error404.php');
            die();
        }

        require_once $controllerPath;

        $controller = new $controllerName;
        $action = $actionName;

        if (method_exists($controller, $action) == false) {
            header('Location: ./views/shared/error404.php');
            die();
        }

        if (count($this->post) == 0) {
            $controller->$action();
        } else {
            $controller->$action($this->post);
        }
    }
}