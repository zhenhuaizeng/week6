<?php
//This is my controller

//Turn on error reporting
ini_set('display_errors',1);
error_reporting(E_ALL);

//Start a session
session_start();

//Require autoload file
require_once('vendor/autoload.php');

//Instantiate F3 Base class
$f3 = Base::instance();

$f3->route('GET /', function(){

    //Instantiate a view
    $view = new Template();
    echo $view -> render("views/info.html");
});


//Run Fat Free
$f3->run();