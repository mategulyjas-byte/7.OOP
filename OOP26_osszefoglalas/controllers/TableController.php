<?php

namespace controllers;

use modells\User;
use traits\ViewTrait;

class TableController{

use ViewTrait;



function table($connection){

$table = new User($connection);

$data= ($table->select(["id", "name", "email", "password"])->
selectösszegzes());

$this->show("table", $data);}
}