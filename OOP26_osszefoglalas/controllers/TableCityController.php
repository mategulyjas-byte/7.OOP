<?php

namespace controllers;

use modells\City;
use tidy;
use traits\ViewTrait;

class TableCityController{

use ViewTrait;

function tablecity($connection){

$city =new City($connection);
$data=$city->select(["tid","telepules","telepulesresz","tkod","mkod","irszam","nepesseg"]);
$data= $city->selectösszegzes();
$this->show("tablecity",$data);

}


function tablecityprocess($connection){

$city = new City($connection);





if(isset($_POST["torles"])){$city->delete()->wheredelete("tid", "=", $_POST["id"])->deleteosszegzes();}

if(isset($_POST["telepulesmod"])){$city->update()->ertekek2("telepules",$_POST["ujtelepules"])->whereupdate("tid", "=", $_POST["id"])->updateosszegzes();}

if(isset($_POST["telepulesreszmod"])){$city->update()->ertekek2("telepulesresz",$_POST["ujtelepulesresz"])->whereupdate("tid", "=", $_POST["id"])->updateosszegzes();}

if(isset($_POST["tkodmod"])){$city->update()->ertekek2("tkod",$_POST["ujtekod"])->whereupdate("tid", "=", $_POST["id"])->updateosszegzes();}

if(isset($_POST["mkodmod"])){$city->update()->ertekek2("mkod",$_POST["ujmkod"])->whereupdate("tid", "=", $_POST["id"])->updateosszegzes();}

if(isset($_POST["irszammod"])){$city->update()->ertekek2("irszam",$_POST["ujirszam"])->whereupdate("tid", "=", $_POST["id"])->updateosszegzes();}

if(isset($_POST["nepessegmmod"])){$city->update()->ertekek2("nepesseg",$_POST["ujnepesseg"])->whereupdate("tid", "=", $_POST["id"])->updateosszegzes();}







$data=$city->select(["tid","telepules","telepulesresz","tkod","mkod","irszam","nepesseg"]);


if( isset($_POST["tid"]) && $_POST["tid"] != "" ){$city->where("tid", "=" , $_POST["tid"]);}
if( isset($_POST["telepules"]) && $_POST["telepules"] != "" ){$city->where("telepules", "like" , $_POST["telepules"]."%");}
if( isset($_POST["telepulesresz"]) &&     $_POST["telepulesresz"] != "" ){$city->where("telepulesresz", "like" , $_POST["telepulesresz"]."%");}
if( isset($_POST["tkod"]) &&    $_POST["tkod"] != "" ){$city->where("tkod", "=" , $_POST["tkod"]);}
if( isset($_POST["mkod"])   &&     $_POST["mkod"] != "" ){$city->where("mkod", "=" , $_POST["mkod"]);}
if( isset($_POST["irszam"]) &&  $_POST["irszam"] != "" ){$city->where("irszam", "=" , $_POST["irszam"]);}
if( isset($_POST["nepessegtol"]) &&   $_POST["nepessegtol"] != "" ){$city->where("nepesseg", ">=" , $_POST["nepessegtol"]);}
if( isset($_POST["nepessegig"]) &&     $_POST["nepessegig"] != "" ){$city->where("nepesseg", "<=" , $_POST["nepessegig"]);}



$data= $city->selectösszegzes();




$this->show("tablecity",$data);
}


}
