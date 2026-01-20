<?php 
// require "classes/first.php";
// require "classes/second.php";

//function __autoload(){ //Not Suported

spl_autoload_register(function($filename){
    require "classes/".$filename.".php";
});

$obj = new first();
$obj1 = new second();
?>