<?php

require_once './views/View.php';

class Router
{
    private $url;
    private $post;
    private $view;

    /**
     * Router constructor.
     * @param $url
     * @param $post
     */
    public function __construct($url, $post)
    {
        $this->url = $url;
        $this->post = $post;
        $this->view = new View();
    }

    public function route()
    {
        $urlParts = explode("/", $this->url);

        $controllerName = $urlParts[1] . "Controller";
        $actionName = $urlParts[2] . "Action";

        $controllerPath = "./controllers/" . $controllerName . ".php";

        if (file_exists($controllerPath) == false) {
            $this->view->render("main","shared/error404");
            die();
        }

        require_once $controllerPath;

        $controller = new $controllerName;
        $action = $actionName;

        if (method_exists($controller, $action) == false) {
            $this->view->render("main","shared/error404");
            die();
        }

        if (count($this->post) == 0) {
            $controller->$action();
        } else {
            $controller->$action($this->post);
        }
    }
}