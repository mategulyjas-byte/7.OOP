<?php

namespace controllers;

class LogoutController{

function logout(){
    unset($_SESSION["userid"]);

header("location:/");exit;}
}