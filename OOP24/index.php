<?php 
session_start();

$connection= mysqli_connect("localhost","root","","gulyas_mate");

spl_autoload_register(function ($file){include(str_replace("\\",DIRECTORY_SEPARATOR,"$file.php"));});

include __DIR__."/includes/config.php";

use controllers\PageController;
use controllers\GuestController;

$page= new PageController;
$guest= new GuestController;



$url=$_SERVER["REQUEST_URI"];

switch($url){

case '/': $page->fooldal();
break;

case'/kapcsolat':$page->kapcsolat();
break;


case'/regisztracio': if($_SERVER["REQUEST_METHOD"] == "POST"){ $guest->RegisterProcess($connection);} else ( $guest->RegisterView());
break;

default: http_response_code( 404);
}