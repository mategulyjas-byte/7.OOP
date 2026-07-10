<?php

namespace controllers;

use modells\User;
use traits\ViewTrait;

class TableController
{

    use ViewTrait;



    function table($connection)
    {

        $table = new User($connection);



        $data = ($table->select(["id", "name", "email", "password"]));

        $keres = $_POST["keres"] ?? "";

        if ($keres != "") {
            $table->where("name", "like", "%" . $keres . "%");
        }

        $torles = $_POST["torles"] ?? "";

        if ($torles != "") {
            $table->delete()->wheredelete("name", "=", $torles)->deleteosszegzes();
        }

        //$this->show("table", $data);

        $regi = $_POST["regi"] ?? "";
        $uj = $_POST["uj"] ?? "";

        if ($regi != "" && $uj != "") {
            $table->update()->ertekek("$uj")->whereupdate("name", "=", "$regi")->updateosszegzes();
        }

        $data = $table->selectösszegzes();

        $this->show("table", $data);
    }
}
