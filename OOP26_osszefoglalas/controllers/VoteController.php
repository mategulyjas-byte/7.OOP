<?php 
namespace controllers;
 
use traits\ViewTrait;
use modells\Sarkoz;
use modells\Szavazott;
use Select;
use user;

class VoteController{

use ViewTrait;

function vote($connection){


$sarkoz=new Sarkoz($connection);

$data=$sarkoz->select(["id", "sarkozitelepules","szavazas", "link"]);
$data= $sarkoz->selectösszegzes();

$title="szavazas";

$this->show("vote",compact("data","title"));
}




function voteprocess($connection){


$sarkoz=new Sarkoz($connection);
$szavazott= new Szavazott($connection);


if(isset($_POST["torles"])){
$torlendonev_id=$szavazott->select(["szavazas"])->where("userid", "=", $_SESSION["user"]["id"])->selectösszegzesfirst();


 $szavazott->delete()->wheredelete("userid", "=", $_SESSION["user"]["id"])->deleteosszegzes();



$sarkoz->update()->upadatesetkivonas("szavazas", "1")->whereupdate("id", "=", $torlendonev_id["szavazas"])->updateosszegzes();


header("location:/vote"); 
;exit; }




$szavazotte=$szavazott->select(["userid"])->where("userid","=", $_SESSION["user"]["id"])->selectösszegzes();

if(!empty ($szavazotte) ){$_SESSION["flash"]["errors"][]="Ön már szavazott"; header("location:/vote"); 
;exit; 



}




if(isset($_POST["szavaz"]) && !empty($_POST["szavazas"])) {

$sarkoz->update()->upadateset("szavazas", "1")->whereupdate("id", "=", $_POST["szavazas"])->updateosszegzes();}






if(isset($_POST["szavazatmod"])){$sarkoz->update()->ertekek2("szavazas",$_POST["szavazas"])->whereupdate("id", "=", $_POST["id"])->updateosszegzes();}



if (isset($_POST["szavaz"]) && !empty($_POST["szavazas"])) {
    
$kivalasztotttelepules=$sarkoz->select(["sarkozitelepules"])->where("id", "=", $_POST["szavazas"]); $kivalasztotttelepules= $sarkoz->selectösszegzesfirst();


$_SESSION["flash"]["success"]="Ön " . $kivalasztotttelepules["sarkozitelepules"] . " településre szavaozott, köszönjük a szavazást!";

;

$szavazott->insert(["userid", "szavazas"]);}




if (isset($_POST["szavaz"]) && empty($_POST["szavazas"])) {$_SESSION["flash"]["errors"][]="Válaszon települést amire szavazna";}



header("location:/vote"); 

if($_SERVER["REQUEST_METHOD"]== "GET"){unset($_SESSION["flash"]);}

;}}