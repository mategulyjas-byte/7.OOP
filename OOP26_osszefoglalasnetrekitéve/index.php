<?php

session_start();                                // session_startot elindítom, mivel ez az oldal a "belépő pont, ezért több helyen nem kell kíírni, ez minden lapra érvényes
include __DIR__ . "/includes/config.php";

spl_autoload_register(function ($file2) {         // az spl_autoload register arra jó hogy automatikusan betölti a PHP osztályokat és trait-eket a háttérben abban a pillanatban, amikor hivatkozok rájuk pl: use XY trait
    $file2 = (str_replace("\\", "/", $file2));
    include __DIR__ . "/$file2.php";
});

$connection = mysqli_connect("localhost", "mate", "Jawa207210", "mate");    // adatbázis kapcsolaot elindítom- ezeket passzolom majd tovább

use controllers\DataModificationController;              //  megmondom melyik mappában (névtérben) van az adott osztály osztályokat, így lentebb a kódban már nem kell mindenhova kiírni a teljes controllers\ útvonalat.
use controllers\PageController;
use controllers\GuestController;
use controllers\TableController;
use controllers\UserController;
use controllers\LogoutController;
use controllers\TableCityController;
use controllers\SarkozController;
use controllers\SarkozInfoController;
use controllers\VoteController;

$pagecontroller = new PageController;                 // példányosítom az adott osztályt (class) annak érdekében, hogy használhassam
$guestcontroller = new GuestController;
$tablecontroller = new TableController;
$usercontroller = new UserController;
$logoutcontroller = new LogoutController;
$datamodificationcontroller = new DataModificationController;
$tablecitycontroller = new TableCityController;
$sarkozcontroller = new SarkozController;
$sarkozinfocontroller = new SarkozInfoController;
$votecontroller = new VoteController;

//$url = $_SERVER["REQUEST_URI"];

$url = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);      //Egy változót készítek, mely az útvonal- a böngészőbe beütött címek/aloldalak jelöli- ez a változó alább a case ben meghatározot értékeket (/register/about) veheti fel, illetva ha ezek közül egyiket sem, akkor egy default értéket ,ely pl hiba kíírásra jó Ez a sor arra jó, hogy letisztítsa a weboldal címét (URL), és csak a tényleges útvonalat tartsa meg,


switch ($url) {
    case '/':                               //Ha nincs beütött cím akkor homepage oldalra irányít ( a korábban már létrehozott Pagecontroller class ben definiált (a fentebbi use PageControlllerer behyvtam az adott classt majd $pagecontroller new PageControllere -er példányosította, és így tudtam használni a benne lévő jelen esetben homepage () funkciót aminek a használatával megkelenítem a View -be lévő homepage.php oldalt)
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
        if ($_SERVER["REQUEST_METHOD"] === "GET") {
            $datamodificationcontroller->datamodification($connection);
        } else {
            $datamodificationcontroller->datamodificationprocess($connection);
        }
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
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $tablecitycontroller->tablecityprocess($connection);
        } else {
            $tablecitycontroller->tablecity($connection);
        }
        break;


    case '/sarkoz':
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $sarkozcontroller->sarkozprocess($connection);
        } else {
            $sarkozcontroller->sarkoz($connection);
        }
        break;
    case '/sarkozinfo':

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $sarkozinfocontroller->sarkozinfoprocess($connection);
        } else {
            $sarkozinfocontroller->sarkozinfo($connection);
        }

        break;



    case '/vote':

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $votecontroller->voteprocess($connection);
        } else {
            $votecontroller->vote($connection);
        }

        break;
    default:
        http_response_code(400);
        break;
}
