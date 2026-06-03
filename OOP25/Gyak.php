<?php

// insert into users ('name', 'email') VALUES ( 'name', 'email')

use Odbc\Connection;

session_start();
$connection=mysqli_connect("localhost","root","","gulyas_mate");


class Function1{

public $connection;

function __construct($connection){
    $this->connection=$connection;
}

function insert($Tömb){

 $tömbelemekmegnevezése=implode(",",$Tömb);

$bevittértékek="";
foreach ($Tömb as $tömbelem){
    $bevittértékek.= "'".$tömbelem."',";
}

$bevittértékek=rtrim($bevittértékek,",");

 $sql= ("insert into user2 ($tömbelemekmegnevezése) VALUES ($bevittértékek)");
print_r ($sql);

mysqli_query($this->connection, "insert into user2 ($tömbelemekmegnevezése) VALUES ($bevittértékek)");


;}}

//$functionok1 = new Function1($connection);

//print $functionok1->insert(["name","email","password"]);










 $connection2= mysqli_connect ("localhost","root","","gulyas_mate");

class function2{

public $connection2;
public $table = "user2";

function __construct($connection)
{$this->connection2=$connection;
}

function insert($Tömb2){

//insert into user (name, email,) values ('$_Post[name],$_POST["email]')


//implode

$adattáblafejléc= implode(",",$Tömb2);
$beírandóérték="";


foreach( $Tömb2 as $tömbelem){


$beírandóérték.="'" .$_POST[$tömbelem]."',";}




$beírandóérték=rtrim($beírandóérték, ",");

//$sqli= ("insert into $this->table ($adattáblafejléc) values ($this->beírandóérték)");


mysqli_query($this->connection2,"insert into $this->table ($adattáblafejléc) values ($beírandóérték)");

;}
}
$functionok2 = new function2($connection2);

$functionok2->insert(["name", "email","password"]);