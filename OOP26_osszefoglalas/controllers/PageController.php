<?php

namespace controllers;

use traits\ViewTrait;

class PageController{
use ViewTrait;

function homepage(){$this->show("homepage");  }

function about(){$this->show("about");  }

function register(){$this->show("register");  }

}

$pagecontroller = new PageController;