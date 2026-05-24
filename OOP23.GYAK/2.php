<?php

 class Acars{


static function CarInfo($mark="nincs megadva",$type="nincs megadva",$year="nincs megadva"){ return "A gépjármű márkája: $mark, típusa: $type, évjárata: $year";}

static function Category($category="nem definiált"){ return "Ez a jármű az alábi kategóriába tartozik $category";}
}
print Acars::CarInfo("Seat");
print "\n";
print Acars::Category("személygépjármű");


// ststic function használatakor nincs szükség példámyosításra, közvetlen a class ra hivatkozva kettőspontal hívható az adott statikus függvény





class Bcars{


public $mark, $type, $year, $category;
public static $db; 

function __construct($mark="nincs megadva",$type="nincs megadva",$year="nincs megadva", $category="nincs megadva")

{$this->mark=$mark;
$this->type=$type;
$this->year=$year;
$this->category=$category;
}

function CarInfo($mark="nincs megadva",$type="nincs megadva",$year="nincs megadva", $category="nincs megadva")
{return $mark ." ". $type ." ". $year ." ". $category; }

static function objektumokszama(){return ++self::$db;}
}

$car1= new Bcars();
print "\n";print "\n";print "\n";
print $car1->CarInfo("Seat");
print "\n";
print Bcars::objektumokszama();

// self::  olyan mint a $this-> itt arra használtam, hogy megszámoltassam a példányosított objektumok számát




class Ccars{


public $mark, $type, $year, $category;
public $db; 

function __construct($mark="nincs megadva",$type="nincs megadva",$year="nincs megadva", $category="nincs megadva")

{$this->mark=$mark;
$this->type=$type;
$this->year=$year;
$this->category=$category;
}

function CarInfo($mark="nincs megadva",$type="nincs megadva",$year="nincs megadva", $category="nincs megadva")
{return $mark ." ". $type ." ". $year ." ". $category; }

function CR(){;}

function objektumokszama(){$dbszám= get_class_methods("Ccars"); return count ($dbszám);}
}

$car1= new Ccars();

print "\n";print "\n";print "\n";
print $car1->CarInfo("Seat");
print "\n";
print $car1->objektumokszama();

// get_class_method egy béptett function- itt viisaadja functionok számát, majd countal kiolvastatom a db számot, és kííratom, hogy hány db functon van a Ccars classban












class Dcars{


public $mark, $type, $year, $category,$ffff;
public $db; 

function __construct($mark="nincs megadva",$type="nincs megadva",$year="nincs megadva", $category="nincs megadva")

{$this->mark=$mark;
$this->type=$type;
$this->year=$year;
$this->category=$category;

}

function CarInfo($mark="nincs megadva",$type="nincs megadva",$year="nincs megadva", $category="nincs megadva")
{return $mark ." ". $type ." ". $year ." ". $category; }

function CR(){;}

function valtozokszama(){$dbszám= get_object_vars($this); return count ($dbszám);}
}

$car1= new Dcars();

print "\n";print "\n";print "\n";
print $car1->CarInfo("Seat");
print "\n";
print $car1->valtozokszama();


// összegyűjtöm a get_object_vars($this) el majd countal leszámolom a Dcars ban lévő összes változó számát)








class Ecars{


public $mark, $type, $year, $category;
public $db; 

function __construct($mark="nincs megadva",$type="nincs megadva",$year="nincs megadva", $category="nincs megadva")

{$this->mark=$mark;
$this->type=$type;
$this->year=$year;
$this->category=$category;
}

function CarInfo($mark="nincs megadva",$type="nincs megadva",$year="nincs megadva", $category="nincs megadva")
{return $mark ." ". $type ." ". $year ." ". $category; }


function __call($name, $arguments){ return "nem létezik a $name nevű függvény illetve a .$arguments[0]. nevű érték sem ";}

}

$car1= new Ecars();

print "\n";print "\n";print "\n";
print $car1->CarInfo("Seat");
print "\n";

print_r ($car1->nemletezofunction("piros"));








class Fcars{
public $mark, $type, $year, $category;
public $color;

function __construct($mark="nincs megadva",$type="nincs megadva",$year="nincs megadva", $category="nincs megadva", $color="nincs megadva")

{$this->mark=$mark;
$this->type=$type;
$this->year=$year;
$this->category=$category;
$this->color=$color;
}

function CarInfo($mark="nincs megadva",$type="nincs megadva",$year="nincs megadva", $category="nincs megadva")
{return $mark ." ". $type ." ". $year ." ". $category; }

function __get($name){return "A $name nevű tulajdonság nem létezik";}
}

$car1= new Fcars();

print "\n";print "\n";print "\n";
print $car1->CarInfo("Seat");
print "\n";
$car1->color="blue";

print $car1->color;







class Gcars{
public $mark, $type, $year, $category;
public $color;

function __construct($mark="nincs megadva",$type="nincs megadva",$year="nincs megadva", $category="nincs megadva", $color="nincs megadva")

{$this->mark=$mark;
$this->type=$type;
$this->year=$year;
$this->category=$category;
$this->color=$color;
}

function CarInfo($mark="nincs megadva",$type="nincs megadva",$year="nincs megadva", $category="nincs megadva")
{return $mark ." ". $type ." ". $year ." ". $category; }

 function __set($name, $value)
 {print "nem lehete az egyébkénttsem létező változóhoz $value értéket hozzárendelni";}
    
 }

$car1= new Gcars();

print "\n";print "\n";print "\n";
print "\n";
print $car1->szín="piros";











class Hcars{
public $mark, $type, $year, $category;
public $color;

function __construct($mark="nincs megadva",$type="nincs megadva",$year="nincs megadva", $category="nincs megadva", $color="nincs megadva")

{$this->mark=$mark;
$this->type=$type;
$this->year=$year;
$this->category=$category;
$this->color=$color;
}

function CarInfo($mark="nincs megadva",$type="nincs megadva",$year="nincs megadva", $category="nincs megadva")
{return $mark ." ". $type ." ". $year ." ". $category; }


static function __callStatic($name, $arguments)
{print "none";}
 }

$car1= new Hcars();

print "\n";print "\n";print "\n";
print "\n";
print Hcars:: nemléetezőfunction("zöld");









class Icars{

public $comments;

function becsomagol($array){ return ($this->comments=json_encode($array)) ;}

function kicsomagol($array){return json_decode($this->comments);}


 }

print "\n";

 $autóim1= new Icars();

 $array=["A legjobb autó a Ford", "A Másodki legygyorsabba  ferrari"];



 print $autóim1->becsomagol($array);


 print_r ($autóim1->kicsomagol($array));


