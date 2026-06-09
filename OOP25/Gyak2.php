<?php

$connection = mysqli_connect("localhost", "root","","gulyas_mate");

class SqlFunction{

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
//$sql=("insert into $this->table ($tömbnevek) values ($beküldöttértékek)");
// print $sql;

$sql=mysqli_query($this->connection,"insert into $this->table ($tömbnevek) values ($beküldöttértékek)");
}}

$insert1= new SqlFunction ($connection);

print $insert1->insert(["name", "email","password"]);






