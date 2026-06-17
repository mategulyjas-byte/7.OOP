<?php

namespace controllers;

use traits\ViewsTrait;

class PageControllers{
use ViewsTrait;

function homepage(){$this->show("homepage");  }

function about(){$this->show("homepage");  }

function register(){$this->show("homepage");  }

}