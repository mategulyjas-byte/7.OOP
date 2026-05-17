<?php
namespace models;

use mysqli;

class User{

private $table= "user";
// eredmény:  insert into user (name,email,password) values ('Máté Gulyás','mate.gulyjas@gmail.com','11')


function __construct($connection){
$this->connection=$connection;}


function insert($fieldArray){

$valueStr="";

$fieldNamefromArray= implode(",",$fieldArray);





foreach( $fieldArray as $fieldName){



$valueStr.= "'".$_POST[$fieldName]."',";}


$valueStr=rtrim($valueStr, ",");


 mysqli_query($this->connection, " insert into " . $this->table . " ($fieldNamefromArray) values ($valueStr)")  
 
 
 
 
 ;}}








