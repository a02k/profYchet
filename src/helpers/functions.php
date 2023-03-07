<?php

function dd($var)
{
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
    die;
}

function viewInclude($path)
{
    include_once(__DIR_SRC__ . 'views/' . $path . '.php');
}
