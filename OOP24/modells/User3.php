<?php

namespace modells;
use modells\Modell;

class User3 extends Modell{

public $table= "user3";

function __construct($connection)
{$this->connection=$connection;
}
}