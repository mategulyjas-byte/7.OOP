<?php
namespace controllers;

use traits\ViewsTrait;

use models\User;

class PageController{

use ViewsTrait;


function homepag (){$this->show("homepage");}

function about (){$this->show("about");}



function userList ($connection){
$users = new User ($connection);

// select id, name from where name lik ... and id > 10 orderby
 //$list=
 
 $users->select (['id','name'])
    ->where ('name', 'like', '%keresendó%')
     ->where ('id', '>', 10)
     ->orderby('id', 'desc');


     print $users->sqlquery;
//$this->show("userlist" , compact("list"));





}}