<?php
namespace models;

use mysqli;

class Model{

protected $connection, $table;
public $sqlquery="";


    function insert($fieldArray)

    {$fieldNameArray=implode("," ,$fieldArray);
    
    $valuesStr = "";

        foreach ($fieldArray as $fieldkey) {

            $valuesStr .= "'" . $_POST[$fieldkey] . "',";
        }

        $valuesStr = rtrim($valuesStr, ",");

        mysqli_query($this->connection, "insert into " . $this->table . " (" . implode(",", $fieldArray) . ")  values ($valuesStr)");;
    }


function select ($fieldArray){
    

    $fieldNameArray=implode("," ,$fieldArray);

    $this->sqlquery.= "select $fieldNameArray from {$this->table}"; return $this; }

//select $fielNameFrom from * $this->table where name '%szó%' and id>10}


function where ($fieldname, $operator, $value){

//beépített fügvény: stripos, ami valamiben valamit megkeres
// stripos("miben", 'mit'))
// típusazonosan kellvizsgálni  === FONTOS
if( stripos($this->sqlquery, "where") ===false){ $statement= "where";} else{ $statement=" and";}


$this->sqlquery.=" $statement $fieldname $operator '$value' "; return $this;

//$this->sqlquery.=" where $fieldname $operator '$value' "; return $this;

}




function orderby($fieldname,$ascdesc ){
    $this->sqlquery.= "order by $fieldname $ascdesc"; return $this;
}


function execute(){

$sqli=mysqli_query($this->connection, $this->sqlquery);


}


}


