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



if($_SERVER["REQUEST_METHOD"] =="GET"){ $this->adat=$sarkoz->select(["sarkozitelepules"])->selectösszegzes();}


;
$this->show("sarkoz", $this->adat );
}




function sarkozprocess($connection){

 
$sarkoz = new Sarkoz($connection);
$sarkozinfo = new SarkozInfo($connection);



// $sarkoz= new Sarkoz($connection);
// $this->adat=$sarkoz->select(["sarkozitelepules"])->selectösszegzes();
// $this->show("sarkoz", $this->adat );








if(isset($_POST["telepulesvalaszt"]) && !empty($_POST["sarkozitelepules"]))
    
    {$this->data= $sarkoz->select(["id","sarkozitelepules"])->where("sarkozitelepules","=", $_POST["sarkozitelepules"])->selectösszegzesfirst();}  


if (isset($_POST["telepulesvalaszt"]) &&  empty($this->data)){$_SESSION["flash"]["errors"][]="Válasszon másik települést";}






else

{ foreach ($this->data as $key=>$value){$_SESSION[$key]= $value;};}

if (isset($_POST["telepulesvalaszt"]) &&  !empty($this->data)){$_SESSION["flash"]["success"]="Írja";}



if(!empty($_SESSION["sarkozitelepules"]) && !empty($_POST["info"]) && isset($_POST["infoad"])){    
    


           $sarkozinfo->insert(["sarkozitelepules","info","name","nameid"]); unset($_SESSION["sarkozitelepules"]);}

if (isset ($_POST["infoad"])){ unset($_SESSION["flash"]);}


$this->show("sarkoz",$this->data);



if($_SERVER["REQUEST_METHOD"]== "GET"){unset($_SESSION["flash"]);}




}}