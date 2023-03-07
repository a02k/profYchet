<?php

define("__DIR_SRC__", __DIR__ . '/../src/');

spl_autoload_register(function ($class_name) {
    include '..\\' . $class_name . '.php';
});

include_once(__DIR_SRC__ .'helpers/functions.php');
include_once(__DIR_SRC__ . 'routes/web.php');

use Src\App\Route\BaseRoute;

$router = new BaseRoute;

$path = $router->getRequestPath();

$router->getMethod($routes, $path);
$router->view();


// функция для корня
// function home() {
//     return include_once('../pages/home.php');
// }

// // функция для страницы "/about"
// function about() {
//     return 'About us.';
// }

// function page() {

//     $pages = [
//         1 => include_once('./pages/service1.php'),
//         2 => include_once('./pages/service2.php'),
//     ];

//     if (isset($_GET['id']) && isset($pages[$_GET['id']])) {
//         return $pages[$_GET['id']];
//     }

//     return notFound();
// }