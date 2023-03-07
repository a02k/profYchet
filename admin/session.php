<?php

include_once('../src/helpers/functions.php');

require_once('../src/db/Connection.php');

use \Src\Db\Connection;

session_start();

$_SESSION["guest"] = isset($_SESSION["guest"]) ? $_SESSION["guest"] : true;

function guest(): bool
{
    return (bool) $_SESSION['guest'];
}

function login(string $email, string $password)
{
    $users = Connection::getResult(
        "SELECT name FROM users WHERE email = '$email' AND `password` = '$password'"
    );
    // $conn = new Connection();
    // $users = $conn->exec(
    //     "SELECT name FROM users WHERE email = '$email' AND `password` = '$password'"
    // );

    if (count($users) == 0) {
        echo 'Данные ошибочные!';
        return;
    }

    print 'Вы вошли!' . $users[0]['name'];
    
    $_SESSION['guest'] = false;
}

function logout()
{
    $_SESSION['guest'] = true;
}