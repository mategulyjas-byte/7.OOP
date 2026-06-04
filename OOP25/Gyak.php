<?php

// insert into users ('name', 'email') VALUES ( 'name', 'email')

//use Odbc\Connection;

// session_start();
// $connection=mysqli_connect("localhost","root","","gulyas_mate");


// class Function1{

// public $connection;

// function __construct($connection){
//     $this->connection=$connection;
// }

// function insert($Tömb){

//  $tömbelemekmegnevezése=implode(",",$Tömb);

// $bevittértékek="";
// foreach ($Tömb as $tömbelem){
//     $bevittértékek.= "'".$tömbelem."',";
// }

// $bevittértékek=rtrim($bevittértékek,",");

//  $sql= ("insert into user2 ($tömbelemekmegnevezése) VALUES ($bevittértékek)");
// print_r ($sql);

// mysqli_query($this->connection, "insert into user2 ($tömbelemekmegnevezése) VALUES ($bevittértékek)");


// ;}}

//$functionok1 = new Function1($connection);

//print $functionok1->insert(["name","email","password"]);










//  $connection2= mysqli_connect ("localhost","root","","gulyas_mate");

// class function2{

// public $connection2;
// public $table = "user2";

// function __construct($connection)
// {$this->connection2=$connection;
// }

// function insert($Tömb2){

//insert into user (name, email,) values ('$_Post[name],$_POST["email]')


//implode

// $adattáblafejléc= implode(",",$Tömb2);
// $beírandóérték="";


// foreach( $Tömb2 as $tömbelem){


// $beírandóérték.="'" .$_POST[$tömbelem]."',";}




// $beírandóérték=rtrim($beírandóérték, ",");

//$sqli= ("insert into $this->table ($adattáblafejléc) values ($this->beírandóérték)");


// mysqli_query($this->connection2,"insert into $this->table ($adattáblafejléc) values ($beírandóérték)");

// ;}
// }
// $functionok2 = new function2($connection2);

// $functionok2->insert(["name", "email","password"]);







// select email, id, name from users where email=iewk@ and id=2 order by asic
$connection= mysqli_connect("localhost","root","","gulyas_mate");

class Select{
public $query3="";
public $table3="user2";
public $connection;

function __construct($connection){
    $this->connection=$connection;}

function select($Tömb3){

$tömbnevek=implode(",",$Tömb3);

$this->query3.= "Select $tömbnevek from $this->table3"; 

return $this
;}

 function where($mezőnév, $operator, $érték){

if(stripos($this->query3, "where") === false){$szó="where";} else{ $szó="and";}

$this->query3.=" $szó $mezőnév $operator '$érték' "; return $this;

}

function rendezes( $mezőnév, $sorrend){

$this->query3.= " order by $mezőnév $sorrend";return $this;
}


function lekérdezes(){ return

$sqllekerdezes=mysqli_query($this->connection, $this->query3); return $this;
}


}

$query = new Select($connection);

$query->select(["id","name","email"]);
$query->where("id", ">","1");
$query->rendezes("id", "desc");

print $query->query3;
print "\n";

$eredmény=$query->lekérdezes();

//$kííratandó=mysqli_fetch_assoc($eredmény);

//print_r($kííratandó);


while ($kíírteredmény=mysqli_fetch_assoc($eredmény))

print $kíírteredmény["id"];