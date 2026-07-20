<?php 
namespace controllers;
 
use traits\ViewTrait;
use modells\Sarkoz;



class VoteController{

use ViewTrait;

function vote($connection){


$sarkoz=new Sarkoz($connection);

$data=$sarkoz->select(["id", "sarkozitelepules","szavazas"]);
$data= $sarkoz->selectösszegzes();
$this->show("vote",$data);
}


function voteprocess($connection){


$sarkoz=new Sarkoz($connection);

$data=$sarkoz->select(["id", "sarkozitelepules"]);
$data= $sarkoz->selectösszegzes();



if(isset($_POST["szavaz"]) && !empty($_POST["szavazas"])) {

$sarkoz->update()->upadateset("szavazas", "1")->whereupdate("id", "=", $_POST["szavazas"])->updateosszegzes();}



if(isset($_POST["szavazatmod"])){$sarkoz->update()->ertekek2("szavazas",$_POST["szavazas"])->whereupdate("id", "=", $_POST["id"])->updateosszegzes();}



if (isset($_POST["szavaz"]) && !empty($_POST["szavazas"])) {$_SESSION["flash"]["success"]="Köszönjük a szavazást";}

if (isset($_POST["szavaz"]) && empty($_POST["szavazas"])) {$_SESSION["flash"]["errors"][]="Válaszon települést amire szavazna";}


header("location:/vote");

if($_SERVER["REQUEST_METHOD"]== "GET"){unset($_SESSION["flash"]);}

;}}