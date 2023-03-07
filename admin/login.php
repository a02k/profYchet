<?php
include_once('session.php');
$email = $_POST['email'];
$password = $_POST['password'];

login($email, $password);