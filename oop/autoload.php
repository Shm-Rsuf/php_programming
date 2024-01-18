<?php 
// require "autoload/first.php";
// require "autoload/second.php";



spl_autoload_register(function($class_name){
  include "autoload/" . $class_name . ".php";
});

$obj1 = new second();
$obj2 = new first();





?>