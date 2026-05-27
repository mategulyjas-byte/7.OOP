<?php

namespace modells;

use mysqli;

class Modell{

public $table;
public $connection;
public $sqlquery="";


function insert($Tömb){

$tömbnevek=implode(",",$Tömb);

$beírtértékek="";

foreach ($Tömb as $egyelem){

$beírtértékek.="'".$_POST[$egyelem]."',";
}

$beírtértékek=rtrim($beírtértékek,",");

mysqli_query($this->connection, " INSERT INTO ". $this->table. "($tömbnevek) Values ($beírtértékek)");


}


function select($Tömb){

$tömbnevek=implode(",",$Tömb);


$this->sqlquery.="select $tömbnevek from {$this->table} "; return $this;}


function where($mezőnév, $operator,$érték){

if(stripos($this->sqlquery,"where") === false){ $statement="Where";} else {$statement= "and";}

$this->sqlquery.= "$statement $mezőnév $operator '$érték'" ; return $this;

}

function rendezés($mezőnév, $novcsokk){
  $this->sqlquery.="order by $mezőnév $novcsokk"; return $this;  
}

function végrehajtas(){
$sqli=mysqli_query($this->connection, $this->sqlquery);
}


}











