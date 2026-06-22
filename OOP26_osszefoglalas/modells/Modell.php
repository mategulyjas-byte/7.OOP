<?php

namespace modells;

use mysqli;

class Modell
{
    public $connection;
    public $table;
    public $beirtekek = "";
    public $beirtertekek2 = "";
    public $beirtertekek3 = "";


    function __construct($connection)
    {
        $this->connection = $connection;
    }

    function insert($oszlopnevektomb)
    {
        $oszlopnevek = implode(",", $oszlopnevektomb);

        $beirtertekek = "";
        foreach ($oszlopnevektomb as $oszlopnev) {
            $beirtertekek .= ("'" . $_POST[$oszlopnev] . "',");
        }

        $beirtertekek = rtrim($beirtertekek, ",");

        $sqlinsert = mysqli_query($this->connection, "insert into $this->table ($oszlopnevek) values ($beirtertekek)");
    }

    // seclect nema,email, password from user where name='%a%', and email='%@ss.com' orderby 'name'

    function select($oszlopnevektömb)
    {
        $oszlopnevek = implode(",", $oszlopnevektömb);

        $this->beirtekek = " select $oszlopnevek from $this->table ";
        return $this;
    }

    function where($oszlopnev, $relaciojel, $ertek)
    {

        if ((stripos("$this->beirtekek", "where") === false)) {
            $whereorand = "where";
        } else {
            $whereorand = "and";
        }
        $this->beirtekek .= "$whereorand $oszlopnev $relaciojel '$ertek'";
        return $this;
    }

    function orderby($oszlopnev, $ascdesc)
    {

        $this->beirtekek .= " order by $oszlopnev $ascdesc";
        return $this;
    }

    function selectösszegzes()
    {
        $sqlselect = mysqli_query($this->connection, $this->beirtekek);
        $data = [];
        while ($egysor = mysqli_fetch_assoc($sqlselect)) {
            $data[] = $egysor;
        }
        return $data;;
    }


    // delete name, email, password from user where name = Máté and email=akdaidx@swqjos

    function delete()
    {

        $this->beirtertekek2 = " delete from $this->table ";
        return $this;
    }
    function wheredelete($oszlopnev, $relaciojel, $ertek)
    {

        if (stripos($this->beirtertekek2, "where") === false) {
            $whereorand = "where";
        } else {
            $whereorand = "and";
        }
        $this->beirtertekek2 .= " $whereorand $oszlopnev $relaciojel '$ertek'";
        return $this;
    }

    function deleteosszegzes()
    {
        $sqldelete = mysqli_query($this->connection, $this->beirtertekek2);
    }

    //UPDATE `user` SET `id`='[value-1]',`name`='[value-2]',`email`='[value-3]',`password`='[value-4]' WHERE 1

    function update()
    {

        $this->beirtertekek3 = "update $this->table set";
        return $this;
    }

    function ertekek($ujnev)
    {$this->beirtertekek3.=" name = '$ujnev' "; return $this;

      
    }

    function whereupdate($oszlopnev, $relaciojel, $ertek ) {
    if(stripos($this->beirtertekek3, "where") === false){ $whereorand= "where";} else{ $whereorand= "and";}

    $this->beirtertekek3.= " $whereorand $oszlopnev $relaciojel '$ertek' "; return $this;
    }

    function updateosszegzes(){
        $sqlupdate=mysqli_query($this->connection, $this->beirtertekek3);
    }
}