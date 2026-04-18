<?php

class autók{

var $márka, $típus, $személyekszáma;

function getMárka(){ return $this->márka;}

function getTípus(){ return $this->típus;}

function getSzemélyekszáma(){return $this->személyekszáma;}

}

$autó1= new autók;
$autó1->márka="BMW";
$autó1->típus="E30";
$autó1->személyekszáma=5;

print $autó1->getMárka()."<br>".$autó1->getTípus()."<br>".$autó1->getSzemélyekszáma();





class autókk{

var $márka, $típus, $személyekszáma;

function getMárka(){ return $this->márka;}

function getTípus(){ return $this->típus;}

function getSzemélyekszáma(){return $this->személyekszáma;}

function __construct(){ print "<br>"."construct";}


}

$autó1= new autókk;
$autó1->márka="BMW";
$autó1->típus="E30";
$autó1->személyekszáma=5;

print "<br>".$autó1->getMárka()."<br>".$autó1->getTípus()."<br>".$autó1->getSzemélyekszáma();






class autókkk{

var $márka, $típus, $személyekszáma;


function __construct($márka,$típus,$személyekszáma){

$this->márka=$márka;
$this->típus=$típus;
$this->személyekszáma=$személyekszáma;
}

function getMárka(){ return $this->márka;}
function getTípus(){ return $this->típus;}
function getSzemélyekszáma(){return $this->személyekszáma;}

}

$autó1= new autókkk("BMW","E30",5);

print "<br>".$autó1->getMárka()."<br>".$autó1->getTípus()."<br>".$autó1->getSzemélyekszáma();









class autókkkk{

var $márka, $típus, $személyekszáma;


function __construct($márka,$típus,$személyekszáma){

$this->márka=$márka;
$this->típus=$típus;
$this->személyekszáma=$személyekszáma;
}

function getMárka(){ return $this->márka;}
function getTípus(){ return $this->típus;}
function getSzemélyekszáma(){return $this->személyekszáma;}


function __destruct(){ print "destruct";}
}

$autó1= new autókkkk("BMW","E30",5);

print "<br>".$autó1->getMárka()."<br>".$autó1->getTípus()."<br>".$autó1->getSzemélyekszáma()."<br>";













class autókkkkK{

var $márka, $típus, $személyekszáma;


function __construct($márka,$típus,$személyekszáma){

$this->márka=$márka;
$this->típus=$típus;
$this->személyekszáma=$személyekszáma;
}

function getMárka(){ return $this->márka;}
function getTípus(){ return $this->típus;}
function getSzemélyekszáma(){return $this->személyekszáma;}


function __destruct(){ print "destruct";}


function __call($name, $arguments)
{ print $name."<br>";
    print_r ($arguments);
}
}

$autó1= new autókkkKk("BMW","E30",5);

print "<br>".$autó1->getMárka()."<br>".$autó1->getTípus()."<br>".$autó1->getSzemélyekszáma()."<br>";


print $autó1->nemlétezőfüggyvény("nincselem","nincselem");











class kocsi1{

var $márka, $típus, $személyekszáma;


function __construct($márka,$típus,$személyekszáma){

$this->márka=$márka;
$this->típus=$típus;
$this->személyekszáma=$személyekszáma;
}

function getMárka(){ return $this->márka;}
function getTípus(){ return $this->típus;}
function getSzemélyekszáma(){return $this->személyekszáma;}


function __destruct(){ print "destruct";}


function __get($name)

{ print $name."<br>";
}
}

$autó1= new kocsi1("BMW","E30",5);

print "<br>".$autó1->getMárka()."<br>".$autó1->getTípus()."<br>".$autó1->getSzemélyekszáma()."<br>";


print $autó1->nemlétezőfüggyvény;










class kocsi{

var $márka, $típus, $személyekszáma;


function __construct($márka,$típus,$személyekszáma){

$this->márka=$márka;
$this->típus=$típus;
$this->személyekszáma=$személyekszáma;
}

function getMárka(){ return $this->márka;}
function getTípus(){ return $this->típus;}
function getSzemélyekszáma(){return $this->személyekszáma;}


function __destruct(){ print "destruct";}


function __set($name, $arguments)
{ print $name."<br>";
    print_r ($arguments);
}
}

$autó1= new kocsi("BMW","E30",5);

print "<br>".$autó1->getMárka()."<br>".$autó1->getTípus()."<br>".$autó1->getSzemélyekszáma()."<br>";


$autó1->fogyasztás="10 liter";













class kocsi2{

var $márka, $típus, $személyekszáma;


function __construct($márka,$típus,$személyekszáma){

$this->márka=$márka;
$this->típus=$típus;
$this->személyekszáma=$személyekszáma;
}

function getMárka(){ return $this->márka;}
function getTípus(){ return $this->típus;}
function getSzemélyekszáma(){return $this->személyekszáma;}


function __destruct(){ print "destruct";}


function __call($name, $arguments)
{ print $name."<br>";
    print_r ($arguments);
}
}

$autó1= new kocsi2("BMW","E30",5);

print "<br>".$autó1->getMárka()."<br>".$autó1->getTípus()."<br>".$autó1->getSzemélyekszáma()."<br>";


print $autó1->nemlétezőfüggyvény("nincselem","nincselem");









class kocsi3{

var $márka, $típus, $személyekszáma;

static function autó ($márka, $típus, $személyekszáma){

return $márka."<br>".$típus."<br>".$személyekszáma;

}

}

print "<br>".kocsi3:: autó("BMW","E30","5");








die("PPPPPPPP");


class kocsi4{

var $márka, $típus, $személyekszáma;

static function autó ($márka, $típus, $személyekszáma){

return $márka."<br>".$típus."<br>".$személyekszáma;}


static function __callStatic($name, $érték){
    print "<br>".$name;
    print_r ($érték)."<br>";
    }

}



print "<br>".kocsi4:: autó("BMW","E30","5");

print kocsi4:: nemletezofuggveny( "piros", "diesel");



