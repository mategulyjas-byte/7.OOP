<?php
namespace controllers;

use traits\ViewTrait;

class PageController{

use ViewTrait;

function fooldal(){$this->show("fooldal");}

function kapcsolat(){
    
$title="Kapcs";

$this->show("kapcsolat", compact("title"));}
}

