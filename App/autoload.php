<?php
if (!isset($_SESSION)) session_start();

unset($_SESSION['id']);
$_SESSION['user'] = array();

$_SESSION['id'] = 1;

$user = array(
    'id' => $_SESSION['id']++,
    'user' => 'Hector',
    'pass' => '1234'
);

$_SESSION['user'][] = $user;

$user = array(
    'id' => $_SESSION['id']++,
    'user' => 'Pepe',
    'pass' => '4321'
);



$_SESSION['user'][] = $user;

    require_once("config.php");
    require_once("Router.php");
    require_once("Core/Controller.php");
    require_once("Models/User.php");

    

    ?>