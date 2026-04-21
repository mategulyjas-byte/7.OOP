<?php
// class user1 { 
//     public $favbooks;
//     public function setbooks($array){$this->favbooks= json_encode($array);}
//     public function getbooks($array){return json_decode($this->favbooks);}}

// $janos= new user1;

// a public minden szkópan látható, alapból ha nem írok semmita kkor public
// $janos->setbooks($array);




// class user1 { 
//     protected $favbooks;

//     protected function setbooks($array){$this->favbooks= json_encode($array);}
//     public function getbooks($array){return json_decode($this->favbooks);}}

// class XY extends user1{

//  function __construct(){
    
//  print ($this->favbooks);
//  }
// }



// class motorok1 { 
//     protected $marka;

//     protected function __construct ($marka){

// return $this->marka=$marka 

//     ;}}

    
// class motorok2 extends motorok1{

// function __construct ($marka){
//     print $this->marka=$marka;
// }    }

// $motor2= new motorok2("Honda");




// class motorok1 { 
//     public $marka;

//     public function __construct ($marka){

// print_r ($this->marka=$marka) 

//     ;}}

    
// class motorok2 extends motorok1{};

// $motor2 = new motorok2("Honda");





// class motorok1 { 
//     private $marka;

//     private function __construct ($marka){

// print_r ($this->marka=$marka) 

//     ;}}

    
// class motorok2 extends motorok1{};

// $motor2 = new motorok2("Honda");




class motorok1 { 
    private $marka;
 
    public function __construct ($marka){

print_r ($this->marka=$marka) 


    ;}}

$motor1= new motorok1 ("Kawasaki");






// class motorok2 extends motorok1{};

// $motor2 = new motorok2("Honda");















// $array=["Egri csillagok","Pál utcai fiúk"];

// $janos->setbooks($array);
// print $janos->favbooks;  print "<br>";

// $kicsomagolt= $janos->getbooks($array);
// print_r($kicsomagolt);