<?php namespace controller;

    use traits\ViewTrait as VT;

defined("BELEP")|| http_response_code(410) && exit;

class Controller{
   
    use VT;

function homepage(){
    $title="Homepage";
$this->show("homepage", compact("title") );}

function about(){
    $title= "About";
    
$this->show("about", compact("title"));
}
function register (){ 
    $title="Register";
$this->show("register", compact("title"));}
}
