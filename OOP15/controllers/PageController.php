<?php namespace controllers;

    use traits\ViewTrait as VT;

defined("BELEP")|| http_response_code(410) && exit;

class PageController{
   
    use VT;

function homepage(){
    $title="Homepage";
$this->show("homepage", compact("title") );}

function about(){
    $title= "About";
    
$this->show("about", compact("title"));
}}


