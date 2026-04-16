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

$autó1= new autókkk("BMW","E30",3);

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

$autó1= new autókkkk("BMW","E30",3);

print "<br>".$autó1->getMárka()."<br>".$autó1->getTípus()."<br>".$autó1->getSzemélyekszáma()."<br>";




