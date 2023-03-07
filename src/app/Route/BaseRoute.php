<?php

namespace Src\App\Route;

class BaseRoute {

    private $viewFile = 'notFound';

    public function getRequestPath() {
        $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    
        return '/' . ltrim(str_replace('index.php', '', $path), '/');
    }
    
    public function getMethod(array $routes, $path) {
        foreach ($routes as $route => $method) {
            if ($path === $route) {

                $pieces = explode("@", $method);
                $className = $pieces[0];
                $functionName = $pieces[1];

                $this->viewFile = (new $className)->$functionName() . '.php';
            }
        }
    }

    public function view() {
        echo include_once(__DIR_SRC__ .'views/' . $this->viewFile);
    }

    function notFound() {
        header("HTTP/1.0 404 Not Found");
    
        return 'Нет такой страницы';
    }
}