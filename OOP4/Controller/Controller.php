<?php

include __DIR__."/../Trait/ViewTrait.php";

class Controller{

public $ViewData;

use ViewTrait;

// function Fooldal()  {include (__DIR__."/../View/Fooldal.php");}
function Fooldal(){
  
// $url= "https://jsonplaceholder.typicode.com/users";
// $users = json_decode( file_get_contents($url));
// foreach ($users as $user){ print "$user->name.<br>";}
// //print_r($users);


// $url= "users.json";
// $users = json_decode( file_get_contents($url));
// foreach ($users as $user){ print "$user->name.<br>";}


$this->ViewData=[];;


$url= "users.json";
$users = json_decode( file_get_contents($url));
foreach ($users as $user){$this->ViewData[]= $user->name;}



$this->show("Fooldal");}


// function Elerhetoseg(){include (__DIR__."/../View/Elerhetoseg.php");}
function Elerhetoseg(){ $this->show("Elerhetoseg");}

//function Galeria(){include (__DIR__."/../View/Galeria.php");}
function Galeria(){ $this->show("Galeria");}

// function Gyik(){//include (__DIR__."/../View/Gyik.php"); }
function Gyik(){ $this->show("Gyik") ;}

// function Rolunk(){include (__DIR__."/../View/Rolunk.php");}
function Rolunk(){ $this->show("Rolunk");}
}