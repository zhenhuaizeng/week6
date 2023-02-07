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

$f3->route('GET /', function($f3){

    //Instantiate a view
    $f3->set('username', 'jshmo');
    $f3->set('password', sha1('Password01'));
    $f3->set('title', 'Working with Templates');

    //Add your fav food and color
    $f3->set('favfood','hamburger');
    $f3->set('color','red');

    //radius
    $f3->set('radius', 10);

    //Define an array of fruits
    $fruits = array("apple","banana","orange");

//    foreach($fruits as $fruit)
//    {
//        echo $fruit;
//    }

    $f3->set('fruits',$fruits);

    $f3->set('colors',array("red","blue","yellow"));

    $view = new Template();
    echo $view -> render("views/info.html");
});


//Run Fat Free
$f3->run();