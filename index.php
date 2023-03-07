<?php

include_once('./src/helpers/functions.php');

$routes = [
    // срабатывает при вызове корня или /index.php
    '/' => 'home',
    // срабатывает при вызове /about или /index.php/about
    '/about' => 'about',
    // динамические страницы
    '/page' => 'page'
];

function getRequestPath() {
    $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    return '/' . ltrim(str_replace('index.php', '', $path), '/');
}

function getMethod(array $routes, $path) {
    foreach ($routes as $route => $method) {
        if ($path === $route) {
            return $method;
        }
    }

    return 'notFound';
}

// функция для корня
function home() {
    return include_once('./pages/home.php');
}

// функция для страницы "/about"
function about() {
    return 'About us.';
}

function page() {

    $pages = [
        1 => include_once('./pages/service1.php'),
        2 => include_once('./pages/service2.php'),
    ];

    if (isset($_GET['id']) && isset($pages[$_GET['id']])) {
        return $pages[$_GET['id']];
    }

    return notFound();
}

// метод, который отдает заголовок и содержание для маршрутов,
// которые не существуют
function notFound() {
    header("HTTP/1.0 404 Not Found");

    return 'Нет такой страницы';
}


// Роутер
// получаем путь запроса
$path = getRequestPath();
// получаем функцию обработчик
$method = getMethod($routes, $path);

// отдаем данные клиенту
echo $method();