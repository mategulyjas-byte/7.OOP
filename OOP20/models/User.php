<?php

namespace models;
use models\Model;

class User extends Model
{
    protected $table = "user";


    function __construct($connection)
    {$this->connection = $connection;}




















    // function insert($fieldArray)
    // {$valuesStr = "";

    //     foreach ($fieldArray as $fieldkey) {

    //         $valuesStr .= "'" . $_POST[$fieldkey] . "',";
    //     }

    //     $valuesStr = rtrim($valuesStr, ",");

    //     mysqli_query($this->connection, "insert into " . $this->table . " (" . implode(",", $fieldArray) . ")  values ($valuesStr)");;
    // }
}
