<?php
namespace controllers;

use modells\Sarkoz;
use traits\ViewTrait;
use modells\SarkozInfo;


class SarkozController {

public $data=[];


use ViewTrait;

function sarkoz(){$this->show("sarkoz");  }




function sarkozprocess($connection){
 
$sarkoz = new Sarkoz($connection);
$sarkozinfo = new SarkozInfo($connection);


if(isset($_POST["telepulesvalaszt"]) && !empty($_POST["sarkozitelepules"])){$this->data= $sarkoz->select(["id","sarkozitelepules"])->where("sarkozitelepules","=", $_POST["sarkozitelepules"])->selectösszegzesfirst();}  

//print_r( $this->data);

if(!empty($this->data)) { foreach ($this->data as $key=>$value){$_SESSION[$key]= $value;};}

If( isset())
//print $_SESSION["sarkozitelepules"];


if(!empty($_SESSION["sarkozitelepules"]) && !empty($_POST["info"]) && isset($_POST["infoad"])){    
    
           $sarkozinfo->insert(["sarkozitelepules","info"]); unset($_SESSION["sarkozitelepules"]);}



$this->show("sarkoz",$this->data);

if($_SERVER["REQUEST_METHOD"]== "GET"){unset($_SESSION["$this->data"]);}

}}