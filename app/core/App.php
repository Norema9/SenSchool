<?php

class App {
    protected $controller = 'PagesController'; // Default controller
    protected $method = 'home'; // Default method
    protected $params = []; // Default parameters

    public function __construct() {
        $url = $this->parseUrl();

        // Check if the controller exists
        if (isset($url[0]) && file_exists('../app/src/controllers/' . $url[0] . '.php')) {
            $this->controller = $url[0];
            unset($url[0]);
        }

        require_once '../app/src/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;

        // Check if the method exists
        if (isset($url[1]) && method_exists($this->controller, $url[1])) {
            $this->method = $url[1];
            unset($url[1]);
        }

        // Get the parameters
        $this->params = $url ? array_values($url) : [];

        // Call the controller/method with parameters
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function parseUrl() {
        if (isset($_GET['url'])) {
            return explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
        return [];
    }
}
