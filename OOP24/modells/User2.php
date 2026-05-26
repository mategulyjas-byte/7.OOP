<?php
namespace modells;

use mysqli;

class User2{
public $table="user2";

function __construct($connection)
{$this->connection=$connection;
}



function insert($Mezőktömb){

$ValueStr="";

$mezőnevekatömbből=implode(",", $Mezőktömb);

foreach ($Mezőktömb as $Mező){

$ValueStr.="'".$_POST[$Mező]."',";}

$ValueStr=rtrim($ValueStr,",");


mysqli_query($this->connection, " INSERT INTO " . $this->table . "($mezőnevekatömbből) values ($ValueStr)" );

}}