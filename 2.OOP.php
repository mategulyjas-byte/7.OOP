<?php

class felhasznalo
{
    var $név;
    var $birthyear;
    function getAge()
    {
        return date("Y") - $this->birthyear;
    }
    function getName()
    {
        return $this->név;
    }
}

$felhasznalo1 = new felhasznalo;
$felhasznalo1->birthyear = 2000;
$felhasznalo1->név = "Angéla";
print $felhasznalo1->getName()." jelenleg ".$felhasznalo1->getAge()." éves". "<br>";


$felhasznalo2 = new felhasznalo;
$felhasznalo2->birthyear = 1989;
$felhasznalo2->név = "Máté";
print $felhasznalo2->getName()." jelenleg ".$felhasznalo2->getAge()." éves" ."<br>";



class autók{
    var $márka;
    var $típus;
    var $évjárat;

function getmárka(){ return $this->márka;}
function gettípus(){ return $this->típus;}
function getévjárat(){return $this->évjárat;}
}

$autó1 = new autók;
$autó1 -> márka ="Skoda";
$autó1 -> típus ="Fabia";
$autó1 -> évjárat = 2010;

print $autó1->getmárka()." ".$autó1->gettípus()." ".$autó1->getévjárat()."<br>";


$autó2 = new autók;
$autó2 -> márka="Suzuki";
$autó2 -> típus="Swift";
$autó2 -> évjárat="2000";

print $autó2->getmárka()." ".$autó2->gettípus()." ". $autó2->getévjárat();