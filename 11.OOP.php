<?php

class motorok1 {
    var $márka, $típus, $évjárat;

    function motoradatok(){
         return $this->márka." ".$this->típus." ".$this->évjárat;}
}
$motor1= new motorok1;
$motor1->márka="1Suzuki";
$motor1->típus="DL650";
$motor1->évjárat=2004;

print $motor1->motoradatok();


print "<hr>";





class motorok2{
    var $márka, $típus, $évjárat;

    function __construct($márka, $típus, $évjárat)
    {  print "<br>". $this->márka=$márka." ".
        $this->típus=$típus." ".
        $this->évjárat=$évjárat;}
}

$motor2 = new motorok2("2Suzuki","DL650",2004);


print "<hr>";




class motorok3{
    var $márka, $típus, $évjárat;
    function __construct($márka, $típus, $évjárat) 
    // és destructot is használok, akkor duplázza a consztructorban a kíírt értékeket, 
    // ezrt érdemes echo és vesszőt használni, vagy külön értékadást csinálni és csak utána printelni 
    //Nem jó,mert dupláz
    // {print "<br>". $this->márka=$márka." ".
    //     $this->típus=$típus." ".
    //     $this->évjárat=$évjárat;}
    //Jó, de több külön kell értékadást csinálni
    { $this->márka=$márka;
    $this->típus=$típus;
    $this->évjárat=$évjárat;
    print "<br>".$this->márka."  ".$this->típus." ".$this->évjárat;}
    // {echo "<br>", $this->márka=$márka," ",
    //     $this->típus=$típus," ",
    //     $this->évjárat=$évjárat;}
        function __destruct()
      {  print "<br><br>"."A destruct által kíírt eredmény:"." "
      .$this->márka." ".$this->típus." ".$this->évjárat;} }
$motor3 = new motorok3("3Suzuki","DL650",2004);

unset($motor3);
print "<hr>";








class motorok4{
    var $márka, $típus, $évjárat;

    function __construct($márka, $típus, $évjárat)
        {$this->márka=$márka;
        $this->típus=$típus;
        $this->évjárat=$évjárat;
        print "<br>".$this->márka."  ".$this->típus." ".$this->évjárat;
        }
    function __destruct()
      {print "<br><br>"."A destruct által kíírt eredmény:"." "
      .$this->márka." ".$this->típus." ".$this->évjárat;}  
    function __call($name, $arguments)
    { print "<br><br>".$name." "."nevű függvény nem létezik";
    print " "."ezért a"." ";
    print_r ($arguments);
    print "érték sem adható neki";}
      }
$motor4 = new motorok4("4Suzuki","DL650",2004);
// __call a nemlétező functionra reagál () benne van name, és argumenets, így nem hiba keletkezik, hanem kíírattathatjuk hogy az adott function 
//nem létezik, illetve az argumentumait is
$motor4->call_fogyasztásiadatok("4liter");

unset($motor4);

print "<hr>";






class motorok5{
    var $márka, $típus, $évjárat;
    function __construct($márka, $típus, $évjárat)
        {$this->márka=$márka;
        $this->típus=$típus;
        $this->évjárat=$évjárat;
        print "<br>".$this->márka."  ".$this->típus." ".$this->évjárat;
        }
    function __destruct()
      {print "<br><br>"."A destruct által kíírt eredmény:"." "
      .$this->márka." ".$this->típus." ".$this->évjárat;}  
    function __call($name, $arguments)
    { print "<br><br>".$name." "."nevű függvény nem létezik";
    print " "."ezért a"." ";
    print_r ($arguments);
    print "érték sem adható neki";}
    function __get($name)
    { print "<br><br>"."a"." ".$name." "."nevű tulajdonság nem létezik";}
      }
$motor5 = new motorok5("5Suzuki","DL650",2004);
// __get a nemlétező tulajdonságra reagál, (a printél nincs ()-mert nem függvényt,
// hanem tulajdonságot írtam) így nem hiba keletkezik, hanem kíírattathatjuk hogy az adott function 
//nem létezik, illetve az argumentumait is
$motor5->call_fogyasztásiadatok("4liter");
$motor5->get_nemlétezőtulajdonság;
unset($motor5);
print "<hr>";










class motorok6{
    var $márka, $típus, $évjárat;
    function __construct($márka, $típus, $évjárat)
        {$this->márka=$márka;
        $this->típus=$típus;
        $this->évjárat=$évjárat;
        print "<br>".$this->márka."  ".$this->típus." ".$this->évjárat;
        }
    function __destruct()
      {print "<br><br>"."A destruct által kíírt eredmény:"." ".$this->márka." ".$this->típus." ".$this->évjárat;}  
    function __call($name, $arguments)
    { print "<br><br>".$name." "."nevű függvény nem létezik";
    print " "."ezért a"." ";
    print_r ($arguments);
    print "érték sem adható neki";
        print "<br>"." $'motor6->call_fogyasztásadatokfüggvény('4liter')";
    }
    function __get($name)
    { print "<br><br>"."a"." ".$name." "."nevű tulajdonság nem létezik";
        print "<br>"." $'motor6->get_nemlétezőtulajdonság";
    }
    function __set($name, $value)
    { print "<br><br>"."A"." ".$name." ".
    "nevű tulajdonság nem létezik és így a"." ".$value.
    " "."érték sem adható neki";
    print "<br>"." $'motor6->set_nemlétezőtulajdonság='Benzin'";    }
    }
$motor6 = new motorok6("6Suzuki","DL650",2004);
// __get a nemlétező tulajdonságra reagál, (a printél nincs ()-mert nem 
//függvényt, hanem tulajdonságot írtam) így nem hiba keletkezik, hanem kíírattathatjuk hogy az adott function 
//nem létezik, illetve az argumentumait is
$motor6->call_fogyasztásiadatok("4liter");
$motor6->get_nemlétezőtulajdonság;
$motor6->set_nemlétezőtulajdonság="Benzin";

unset($motor6);

print "<hr>";









class motorok7{
    var $márka, $típus, $évjárat;

    function __construct($márka, $típus, $évjárat)
        {$this->márka=$márka;
        $this->típus=$típus;
        $this->évjárat=$évjárat;

        print "<br>".$this->márka."  ".$this->típus." ".$this->évjárat;
        }
    function __destruct()
      {print "<br><br>"."A destruct által kíírt eredmény:"." ".$this->márka." ".$this->típus." ".$this->évjárat;}  

    function __call($name, $arguments)
    { print "<br><br>".$name." "."nevű függvény nem létezik";
    print " "."ezért a"." ";
    print_r ($arguments);
    print "érték sem adható neki";
        print "<br>"." $'motor7->call_fogyasztásadatokfüggvény('4liter')";}
    function __get($name)
    { print "<br><br>"."a"." ".$name." "."nevű tulajdonság nem létezik";
        print "<br>"." $'motor7->get_nemlétezőtulajdonság";}
    function __set($name, $value)
    { print "<br><br>"."A"." ".$name." "."nevű tulajdonság nem létezik és így a"
    ." ".$value." "."érték sem adható neki";
    print "<br>"." $'motor7->set_nemlétezőtulajdonság='Benzin'"."<br><br>";    }

    static function motormárka($márka){
         return $márka ; print "<br>";}    }
$motor7 = new motorok7("7Suzuki","DL650",2004);
$motor7->call_fogyasztásiadatok("4liter");
$motor7->get_nemlétezőtulajdonság;
$motor7->set_nemlétezőtulajdonság="Benzin";

print $motor7::motormárka("Yamaha");
    print "<br>"."$'motor7::static function motormárka('Yamaha')";

unset($motor7);

print "<hr>";














class motorok8{
    var $márka, $típus, $évjárat;

    function __construct($márka, $típus, $évjárat)
        {$this->márka=$márka;
        $this->típus=$típus;
        $this->évjárat=$évjárat;

        print "<br>".$this->márka."  ".$this->típus." ".$this->évjárat;
        }
    function __destruct()
      {print "<br><br>"."A destruct által kíírt eredmény:"." ".$this->márka." ".$this->típus." ".$this->évjárat;}  

    function __call($name, $arguments)
    { print "<br><br>".$name." "."nevű függvény nem létezik";
    print " "."ezért a"." ";
    print_r ($arguments);
    print "érték sem adható neki";
        print "<br>"." $'motor8->call_fogyasztásadatokfüggvény('4liter')";}
    function __get($name)
    { print "<br><br>"."a"." ".$name." "."nevű tulajdonság nem létezik";
        print "<br>"." $'motor8->get_nemlétezőtulajdonság";}
    function __set($name, $value)
    { print "<br><br>"."A"." ".$name." "."nevű tulajdonság nem létezik és így a"." "
    .$value." "."érték sem adható neki";
    print "<br>"." $'motor8->set_nemlétezőtulajdonság='Benzin'"."<br><br>";    }
    static function motormárka($márka){
         return $márka ; print "<br>";}
    static function __callStatic($name, $arguments)
    { print "<br><br>"." "."A"." ".$name.""."nevű hívott függvény se létezik és annak"."";
    print_r ($arguments);
    print "értékei nek léteznek"."<br>";
    print "$'motor8::callStatic nemlétezőfüggvény('100km/h'";}}
$motor8 = new motorok8("8Suzuki","DL650",2004);
$motor8->call_fogyasztásiadatok("4liter");
$motor8->get_nemlétezőtulajdonság;
$motor8->set_nemlétezőtulajdonság="Benzin";
print $motor8::motormárka("Yamaha");
    print "<br>"."$'motor7::static function motormárka('Yamaha')";

print $motor8::callStaticnemlétezőfüggvény("100km/h");


unset($motor8);

print "<hr>";


