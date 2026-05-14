<?php
namespace controllers;

use traits\ViewsTrait;

class PageController{

use ViewsTrait;

function homepag (){$this->show("homepage");}

function about (){$this->show("about");}



}