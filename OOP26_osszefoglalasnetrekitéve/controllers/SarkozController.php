<?php
namespace controllers;

use modells\Sarkoz;
use traits\ViewTrait;
use modells\SarkozInfo;


class SarkozController {


public $data=[];
public $adat=[];

use ViewTrait;

function sarkoz($connection){ unset($_SESSION["flash"]);    

$sarkoz= new Sarkoz($connection);

$data=$this->data;

if($_SERVER["REQUEST_METHOD"] =="GET"){ $data=$sarkoz->select(["sarkozitelepules"])->selectösszegzes();}

$title="Élmények megosztása"
;
$this->show("sarkoz",  compact("data","title"));
}




function sarkozprocess($connection){

 
$sarkoz = new Sarkoz($connection);
$sarkozinfo = new SarkozInfo($connection);



if(isset($_POST["telepulesvalaszt"]) && !empty($_POST["sarkozitelepules"]))
    
    {$this->data= $sarkoz->select(["id","sarkozitelepules"])->where("sarkozitelepules","=", $_POST["sarkozitelepules"])->selectösszegzesfirst();}  


if (isset($_POST["telepulesvalaszt"]) &&  empty($this->data)){$_SESSION["flash"]["errors"][]="Válasszon másik települést";}






else

{ foreach ($this->data as $key=>$value){$_SESSION[$key]= $value;};}

if (isset($_POST["telepulesvalaszt"]) &&  !empty($this->data)){$_SESSION["flash"]["success"]="Írja ide észrevételeit, tapasztalatai ". $_POST["sarkozitelepules"]."  településsel kapcsolatban";}



if(!empty($_SESSION["sarkozitelepules"]) && !empty($_POST["info"]) && isset($_POST["infoad"])){    
    


           $sarkozinfo->insert(["sarkozitelepules","info","name","nameid"]); unset($_SESSION["sarkozitelepules"]);}

if (isset ($_POST["infoad"])){ unset($_SESSION["flash"]);}


$this->show("sarkoz",$this->data);



if($_SERVER["REQUEST_METHOD"]== "GET"){unset($_SESSION["flash"]);}




}}