<?php

namespace controllers;

class LogoutController{

function logout(){
    unset($_SESSION["user"]["id"]);

header("location:/");exit;}
}