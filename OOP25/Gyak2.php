<?php

$connection = mysqli_connect("localhost", "root","","gulyas_mate");

class SqlFunction1{

public $connection;
function __construct($connection){$this->connection=$connection;}



public $table="user2";
// insert into user (name, email, password) values ('name','email','password')

function insert($Tömb){



$tömbnevek=implode(",",$Tömb);

$beküldöttértékek="";

foreach($Tömb as $tömbelem){
    $beküldöttértékek.= ("'".$tömbelem."',");}

    $beküldöttértékek=rtrim($beküldöttértékek,",");

print $tömbnevek;
print $beküldöttértékek;

print "<br>";
$sql=("insert into $this->table ($tömbnevek) values ($beküldöttértékek)");
 print $sql;

$sql=mysqli_query($this->connection,"insert into $this->table ($tömbnevek) values ($beküldöttértékek)");
}}

$insert1= new SqlFunction1 ($connection);

print $insert1->insert(["name", "email","password"]);
print "<br>";












class SqlFunction2{

private $sql2="";
public $connection;
public $table= "user3";

function __construct($connection){$this->connection=$connection;}

// select * from user where name=Angi, and email=exj$xwx.hu order by asc

function select($Tömb2){

$tömbelem2=implode(",",$Tömb2);
//print $tömbeleme2;
$this->sql2.= " Select $tömbelem2 from $this->table"; return $this;
}

function where( $mezőnév, $operátor, $érték){

if(stripos($this->sql2, "where") === false){ $whereand = " where ";} else{ $whereand = " and ";}

$this->sql2.=" $whereand $mezőnév $operátor '$érték'"; return $this;}

function order($mezőnév, $sorrend){
$this->sql2.="order by $mezőnév $sorrend"; return $this;

}

function lekerdezes(){ return
  $készsql= mysqli_query($this->connection, $this->sql2); return $this;
}
}


$sqllkeredezes2= new SqlFunction2($connection);

$sqllkeredezes2->select(["name","id"]);
$sqllkeredezes2->where("name", "=", "Máté");

$eredmény=$sqllkeredezes2->lekerdezes();


while($kíírteredmény=mysqli_fetch_assoc($eredmény))


print $kíírteredmény["id"];
//$select1=new SqlFunction2($connection);
//$select1->select(["name","email","password"]);



