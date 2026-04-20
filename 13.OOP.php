<?php
class user1 { 
    var $favbooks;
    function setbooks($array){$this->favbooks= json_encode($array);}
    function getbooks($array){return json_decode($this->favbooks);}}

$janos= new user1();
$array=["Egri csillagok","Pál utcai fiúk"];

$janos->setbooks($array);
print $janos->favbooks;  print "<br>";

$kicsomagolt= $janos->getbooks($array);
print_r($kicsomagolt); 

$péter= new user1();
$array=["Vuk","Abigél"];

$péter->setbooks($array);
print "<hr>";
print $péter->favbooks;print "<br>";

$kicsomagolt=$péter->getbooks($array);
print_r ($kicsomagolt);


