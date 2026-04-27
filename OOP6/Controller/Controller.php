<?php

include __DIR__."/../ViewTrait/ViewTrait.php";

class Controller{
use ViewTrait;  

function Homepage(){ $this->show("Homepage");}
}
