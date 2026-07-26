<?php



namespace controllers;

use modells\SarkozInfo;
use traits\ViewTrait;

class SarkozInfoController
{

    use ViewTrait;

    function sarkozinfo($connection)
    {

        $sarkozinfo = new SarkozInfo($connection);

        $title="Ti írtátok";
        $data = $sarkozinfo->select(["id", "sarkozitelepules", "info", "name"]);
        $data = $sarkozinfo->selectösszegzes();
        
        $this->show("sarkozinfo", compact("data", "title"));
        exit;
    }



    function sarkozinfoprocess($connection)
    {

        $sarkozinfo = new SarkozInfo($connection);;




if(isset($_POST["torles"])){$sarkozinfo->delete()->wheredelete("id", "=", $_POST["idkeres"])->deleteosszegzes();}

if(isset($_POST["infomod"]) && !empty($_POST["ujinfo"])){$sarkozinfo->update()->ertekek2("info",$_POST["ujinfo"])->whereupdate("id", "=", $_POST["tid"])->updateosszegzes();}



        $data = $sarkozinfo->select(["id", "sarkozitelepules", "info", "name"]);

        if (isset($_POST["id"]) && !empty($_POST["id"])) {
            $sarkozinfo->where("id", "=", $_POST["id"]);
        }
        if (isset($_POST["sarkozitelepules"]) &&  !empty($_POST["sarkozitelepules"])) {
            $sarkozinfo->wherelikeselect("sarkozitelepules", "%" . $_POST["sarkozitelepules"] . "%");
        }
        if (isset($_POST["info"]) &&    !empty($_POST["info"])) {
            $sarkozinfo->wherelikeselect("info", "%" . $_POST["info"] . "%");
        }
        if (isset($_POST["name"]) &&   !empty($_POST["name"])) {
            $sarkozinfo->where("name", "=", $_POST["name"]);
        }



        $data = $sarkozinfo->selectösszegzes();




        $this->show("sarkozinfo", $data);
    }
}
