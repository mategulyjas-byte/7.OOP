<?php

namespace controllers;

use traits\ViewTrait;
use modells\User;
use traits\ValidationTrait;

class DataModificationController
{
    use ValidationTrait;
    use ViewTrait;

    function datamodification()
    {
        $this->show("datamodification");
    }

function datamodificationprocess($connection){

$user = new User($connection);

$user->update()->ertekek2("name",$_POST["name"])->ertekek2("email",$_POST["email"])->ertekek2("password", $_POST["password"]) ->whereupdate("id", "=" ,$_SESSION["user"]["id"])->updateosszegzes();

header("location:/datamodification") ;exit;

}}




