<?php namespace Controller;
// hivatkozási módok:
    //semmi
    //use \ViewTrait\ViewTrait;
    use View\ViewTrait\ViewTrait as VT;

defined("BELEP")|| http_response_code(410) && exit;
//include __DIR__."/../View/ViewTrait/ViewTrait.php";

class Controller{
    //use \ViewTrait\ViewTrait;
    //use ViewTrait;
    use VT;

function Homepage(){$this->show("Homepage" );}

function About(){
    $title= "rólunk";

$this->show("About", compact("title"));}

}