<?php

// class EmberekJellemzoi{

// public $nev;
// public $datum;
// public $szin;
// public $szam1;

// function eletkor(){return date("Y") - $this->datum;}

// function keresztnev(){return $this->nev;}

// function kedvencszín() { return $this->szin;}

// function jellemzok(){if($this->datum == 1990){ return $this->datum ;} else{ print "hibás dátum";}}

// function analizis1(){ if ($this->nev !="David" && $this->datum==1990){print "Helyes adatok";}}

// function analizis2(){if(($this->datum > 1989 || $this->nev == "Sanyi") && $this->szin == "lila" ){ print "analízis2";} else{ print "analizis 2 feltételei nem teljesültek";}}

// function analízis3(){ if($this->datum <= 100 && $this->nev == "SANYI"){  while ($this->datum <= 100 && $this->nev == "SANYI") {print "analiízis 3 teljesült";} } else{ print "analízis 3 nem teljesült";}} 


// function igaz(){if ($this->nev =="SANYI")  { return true;} }

// function funtionösszehasonlitas1(){ if($this->igaz() == true ){ return true;}}

// function hamis(){if($this->nev == "MÁTÉ"){ return true;}}

// function funkcionoszehasonlítas2(){ if ($this->hamis() == true) {print " MÁTÉ"; return true;}}

// function funkcionoszehasonlitas3(){ if( ($this->funtionösszehasonlitas1() == true) && ($this->funkcionoszehasonlítas2() == false )){ print " összehasonlítás 3";}}

// function relacio(){ if ($this->szam1 >4) {print "A szam nagyobb 4-nél";};}

// };


// $ember1 = new EmberekJellemzoi;

// $ember1->nev="SANYI";
// $ember1->datum=1990;
// $ember1->szin="kék";
// $ember1->szam1=5;


// print $ember1->eletkor();
// print "\n";
// print $ember1->keresztnev();
// print "\n";
// print $ember1->kedvencszín();
// print "\n";
// print $ember1->jellemzok();
// print "\n";
// print $ember1->analizis1();
// print "\n";
// print$ember1->analizis2();
// print "\n";
// print $ember1->analízis3();

//print $ember1->funtionösszehasonlitas1();
// print "\n";

// print $ember1->funkcionoszehasonlítas2();
// print "\n";

// print $ember1->funkcionoszehasonlitas3();




// class Emberekjellemzoi{

// public $szuletesidatum;
// public $nev;
// public $nem;



// function __construct($datum="nincsmegadva",$name="nincsmegadva",$nem="nincsmegadva"){
// $this->szuletesidatum=$datum;
// $this->nev=$name;
// $this->nem=$nem; print "A constructor lefutott \n";}

// function összesadat(){return ($this->szuletesidatum ." ".  $this->nev." ".  $this->nem);}


// function __destruct(){print "\nA destuctor lefutott ";}

    
// }

// $ember1= new Emberekjellemzoi(1999,"nö");

// print $ember1->szuletesidatum;

// print "\n";
// $ember2 = new Emberekjellemzoi("Angi");

// print $ember2->nem;

// $ember3= new Emberekjellemzoi(1999,"Réka","nő");

// print $ember3->összesadat();

// unset ($ember3);




class Emberekjellemzoi{

public $szuletesidatum;
public $nev;
public $nem;


function __call($name, $arguments)

{ print "Nem létezik a   $name " ;
print ($arguments[0]." és ". $arguments[1]);
print "nevű argumentuma sem";}

}

$ember1 = new Emberekjellemzoi;

//print $ember1->autók();

print $ember1->kedvencszín("zöld", "kék");
