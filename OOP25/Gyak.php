<?php

// insert into users ('name', 'email') VALUES ( 'name', 'email')
session_start();
$connection=mysqli_connect("localhost","root","","gulyas_mate");


class Functionok{

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


mysqli_query($this->connection, "insert into user2 ($tömbelemekmegnevezése) VALUES ($bevittértékek)");
;}}



$functionok = new Functionok($connection);
print $functionok->insert(["name","email","password"]);

