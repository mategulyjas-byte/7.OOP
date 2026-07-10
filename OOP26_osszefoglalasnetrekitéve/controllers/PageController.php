<?php

namespace controllers;

use traits\ViewTrait;

class PageController{
use ViewTrait;

function homepage(){$this->show("homepage");  }

function about(){$this->show("about");  }

function profile(){$this->show("profile");  }

function datamodification(){$this->show("datamodification");  }


}

//$pagecontroller = new PageController;