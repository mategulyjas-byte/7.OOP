<?php

session_start();
spl_autoload_register(function ($file2){$file2=(str_replace("\\","/", $file2)); include __DIR__."/$file2.php";});