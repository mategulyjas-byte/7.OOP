<?php 
namespace controllers;
 
use traits\ViewTrait;

class VoteController{

use ViewTrait;

function vote(){
$this->show("vote");


}
}