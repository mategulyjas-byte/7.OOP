<?php defined("BELEP")|| http_response_code(410) && exit;

include __DIR__."/../View/ViewTrait/ViewTrait.php";

class Controller{

use ViewTrait;

function Homepage(){$this->show("Homepage" );}

function About(){
    $title= "rólunk";

$this->show("About", compact("title"));}

}