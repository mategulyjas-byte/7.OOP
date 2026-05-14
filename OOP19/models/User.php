<?php namespace models;

class User {



//implode("---", [1,2,3;]); kiprintelev "1---2---3"

private $table= "user", $connection;


function __construct($connection)
{$this->connection = $connection
;
}

function insert($fieldArray){

//$fieldNameFromArray= implode(",",$fieldArray);
//$a .= $b forma valójában a $a = $a . $b kifejezés rövidítése.

//$szoveg = "Szia";
//$szoveg .= " Uram!"; 
// Az eredmény: "Szia Uram!"

$valuesStr="";

foreach ($fieldArray as $fieldkey){

$valuesStr.="'".$_POST[$fieldkey]."',";

}

$valuesStr=rtrim($valuesStr,",");
// eredmény:  insert into user (name,email,password) values ('Máté Gulyás','mate.gulyjas@gmail.com','11')

 mysqli_query($this->connection, "insert into user (".implode(",",$fieldArray).")  values ($valuesStr)");

//eredmény:
//insert into user (name,email,password) values ('Máté Gulyás','mate.gulyjas@gmail.com','11',)


//('{$_POST["name"]}', '".$_POST["email"]."', '".$_POST["password"]."')" ;





   

// print "insert into user (".implode(",",$fieldArray).")  values
//    ('{$_POST["name"]}', '".$_POST["email"]."', '".$_POST["password"]."')" ;


;}
}