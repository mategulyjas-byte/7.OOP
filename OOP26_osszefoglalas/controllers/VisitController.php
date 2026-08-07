<?php

namespace controllers;

use modells\Visit;
use traits\ViewTrait;



class VisitController{

use ViewTrait;

function szamlalo($connection){

$visit=new Visit($connection);

if(!isset($_COOKIE["szamlalo"]) && $_SESSION["url"] == '/'){

$visit->update()->upadateset("visitors", "1")->whereupdate("id", "=" , "1" )->updateosszegzes();};

$data=$visit->select(["visitors"])->where("id", "=", "1")->selectösszegzesfirst();

$_SESSION["latogatok"]=$data["visitors"];

}}


