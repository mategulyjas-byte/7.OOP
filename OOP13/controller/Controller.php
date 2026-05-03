<?php namespace controller;
// hivatkozási módok:
    //semmi
    //use controller\ViewTrait;
    use traits\ViewTrait as VT;

defined("BELEP")|| http_response_code(410) && exit;
//include __DIR__."/../traits/ViewTrait.php";

class Controller{
    //use viewTrait\ViewTrait;
    //use ViewTrait;
    use VT;

function Homepage(){$this->show("Homepage" );}

function About(){
    $title= "rólunk";
    //try{ $this->show("About", compact("title"));}
    //catch (\Exception $hiba){ print $hiba->getMessage();}
$this->show("About", compact("title"));
}}