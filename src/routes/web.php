<?php

$nameSpaceControllers = '\\Src\\App\\Controllers\\';

$routes = [
    // срабатывает при вызове корня или /index.php
    '/' => $nameSpaceControllers . 'HomeController@index',
    // срабатывает при вызове /about или /index.php/about
    '/about' => 'about',
    // динамические страницы
    '/page' => 'page'
];
