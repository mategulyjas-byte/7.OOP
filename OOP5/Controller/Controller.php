<?php

include __DIR__."/../Trait/ViewTrait.php";

class Controller{


use ViewTrait;

function Fooldal(){

$url= "users.json";
$users = json_decode( file_get_contents($url));

$name="Julia";
$product="Asztal";



// $this->show("Fooldal", ["name" => "Lajos","porduct"=>"alma"]);}

// $name="Julia";
// $product="Asztal";
// $this->show("Fooldal", ["name" => $name,"porduct"=>$product]);}


$name="Julia";
$product="Asztal";
$this->show("Fooldal", compact("name","product"));

//print_r (compact("name","product"));



}}

