<?php

session_start();
include __DIR__ . "/includes/config.php";

spl_autoload_register(function ($file2) {
    $file2 = (str_replace("\\", "/", $file2));
    include __DIR__ . "/$file2.php";
});

$connection = mysqli_connect("localhost", "root", "", "gulyas_mate");

use controllers\PageController;
use controllers\GuestController;
use controllers\TableController;
use controllers\UserController;
use controllers\LogoutController;


$pagecontroller = new PageController;
$guestcontroller = new GuestController;
$tablecontroller = new TableController;
$usercontroller = new UserController;
$logoutcontroller = new LogoutController;

$url = $_SERVER["REQUEST_URI"];

switch ($url) {
    case '/':
        $pagecontroller->homepage();
        break;

    case '/about':
        $pagecontroller->about();
        break;


    case '/account':
        if ($_SERVER["REQUEST_METHOD"] === "GET") {
            $usercontroller->account();
        } else {
            $usercontroller->emailkeres($connection);
        }
        break;


    case '/profile':
        $pagecontroller->profile();
        break;


    case '/logout':
        $logoutcontroller->logout();
        break;

    case '/datamodification':
        $pagecontroller->datamodification();
        break;

    case '/register':
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $guestcontroller->register();
        } else {
            $guestcontroller->registerprocess($connection);
        }

        break;

    case '/table':
        $tablecontroller->table($connection);
        break;

    default:
        http_response_code(400);
        break;
}
