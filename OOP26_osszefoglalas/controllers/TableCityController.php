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


$data=$city->select(["tid","telepules","telepulesresz","tkod","mkod","irszam","nepesseg"]);



if( $_POST["tid"] != "" ){$city->where("tid", "=" , $_POST["tid"]);}
if( $_POST["telepules"] != "" ){$city->where("telepules", "like" , $_POST["telepules"]."%");}
if( $_POST["telepulesresz"] != "" ){$city->where("telepulesresz", "like" , $_POST["telepulesresz"]."%");}
if( $_POST["tkod"] != "" ){$city->where("tkod", "=" , $_POST["tkod"]);}
if( $_POST["mkod"] != "" ){$city->where("mkod", "=" , $_POST["mkod"]);}
if( $_POST["irszam"] != "" ){$city->where("irszam", "=" , $_POST["irszam"]);}
if( $_POST["nepessegtol"] != "" ){$city->where("nepesseg", ">=" , $_POST["nepessegtol"]);}
if( $_POST["nepessegig"] != "" ){$city->where("nepesseg", "<=" , $_POST["nepessegig"]);}



$data= $city->selectösszegzes();


$this->show("tablecity",$data);
}


}
