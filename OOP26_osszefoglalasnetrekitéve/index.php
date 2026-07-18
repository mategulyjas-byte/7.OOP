<?php

session_start();
include __DIR__ . "/includes/config.php";

spl_autoload_register(function ($file2) {
    $file2 = (str_replace("\\", "/", $file2));
    include __DIR__ . "/$file2.php";
});

$connection = mysqli_connect("localhost", "mate", "Jawa207210", "mate");

use controllers\DataModificationController;
use controllers\PageController;
use controllers\GuestController;
use controllers\TableController;
use controllers\UserController;
use controllers\LogoutController;
use controllers\TableCityController;
use controllers\SarkozController;
use controllers\SarkozInfoController; 
use controllers\VoteController;               ;

$pagecontroller = new PageController;
$guestcontroller = new GuestController;
$tablecontroller = new TableController;
$usercontroller = new UserController;
$logoutcontroller = new LogoutController;
$datamodificationcontroller= new DataModificationController;
$tablecitycontroller= new TableCityController;
$sarkozcontroller= new SarkozController;
$sarkozinfocontroller= new SarkozInfoController;
$votecontroller= new VoteController;

//$url = $_SERVER["REQUEST_URI"];

$url = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);


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
        if($_SERVER["REQUEST_METHOD"]=== "GET"){$datamodificationcontroller->datamodification();}
        else{$datamodificationcontroller->datamodificationprocess($connection);}
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


          case '/tablecity':
            if($_SERVER["REQUEST_METHOD"]=== "POST"){
        $tablecitycontroller->tablecityprocess($connection);} else{$tablecitycontroller->tablecity($connection);}
        break;


    case '/sarkoz':
            if($_SERVER["REQUEST_METHOD"] === "POST"){ $sarkozcontroller->sarkozprocess($connection);} else{ $sarkozcontroller->sarkoz($connection);}
        break;
    case '/sarkozinfo':
            
            if($_SERVER["REQUEST_METHOD"] === "POST"){ $sarkozinfocontroller->sarkozinfoprocess($connection);} else{ $sarkozinfocontroller->sarkozinfo($connection);}

    break;



case '/vote':
            
            if($_SERVER["REQUEST_METHOD"] === "POST"){ $votecontroller->voteprocess($connection);} else{ $votecontroller->vote($connection);}

break;
    default:
        http_response_code(400);
        break;
}
