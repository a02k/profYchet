<?php

function printService()
{
    $services = [
        1 => include_once('./pages/service1.php'),
        2 => include_once('./pages/service2.php'),
    ];

    if (!isset($service[$pageId])) {
        return 'Страница не найдена!';
    }
    
    if ($service[$pageId]) {
        return include_once('./pages/home.php');
    }
}
