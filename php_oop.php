<?php 
// class Human{
//   function sayHi(){
//     echo "Hello human\n";
//   }
// }

// class Cat{
//   function sayHi(){
//     echo "Hello cat\n";
//   }
// }

// $human1 = new Human();
// $cat1 = new Cat();

// $human1->sayHi();
// $cat1->sayHi();

// class Fruit{

//   //properties
//   public $name;
//   public $color;

//   //methods
//   function set_name($name){
//     $this->name = $name;
//   }

//   function get_name(){
//    return $this->name;
//   }

//   function set_color($color){
//     $this->color = $color;
//   }

//   function get_color(){
//     return $this->color;
//   }
// }

// $apple = new Fruit();
// $apple->set_name("Apple");
// $apple->set_color("red");

// echo $apple->get_name() . "\n";
// echo $apple->get_color() . "\n";

// var_dump($apple);

// class Fruit {
//   public $name;
// }
// $apple = new Fruit();
// $apple->name = "Apple";

// echo $apple->name;

// constructor function in php
// class Person{
//   public $name;
//   public $age;

//   function __construct($personName, $personAge = 0)
//   {
//     $this->name = $personName;
//     $this->age = $personAge;
//   }

//   function personInfo(){
//     if($this->age){
//       echo "My name is {$this->name} and I'm {$this->age} years old\n";
//     }else{
//       echo "My name is {$this->name} and I don't know how old I am\n";
//     }
//   }
// }

// $arif = new Person("Arif",26);
// $jony = new Person("Jony",25);
// $rakhi = new Person("rakhi");

// $arif->personInfo();
// $jony->personInfo();
// $rakhi->personInfo();

// public, private and protected keys in php

// class Fund{
//   private $fund;

//   function __construct($initialFund = 0){
//     $this->fund = $initialFund;
//   }

//    function addFund($money){
//     $this->fund += $money;
//   }

//    function deductFund($money){
//     $this->fund -= $money;
//   }

//    function total(){
//     echo "Total fund is {$this->fund}\n";
//   }


// }

// $ourFund = new Fund(100);
// $ourFund->total();

// class RGB{  
//   private $color;
//   private $red;
//   private $green;
//   private $blue;

//   function __construct($colorCode = '')
//   {
//    $this->color = ltrim($colorCode,"#");
//    $this->parseColor();
//   }

//   function getColor(){
//     return $this->color;
//   }

//   function getRGBColor(){
//     return array($this->red, $this->green, $this->blue);
//   }

//   function readRGBColor(){
//     echo "red = {$this->red}\ngreen = {$this->green}\nblue = {$this->blue}";
//   }

//   function setColor($colorCode){
//     $this->color = ltrim($colorCode,"#");
//     $this->parseColor();
//   }

//   private function parseColor(){
//     if($this->color){
//       list($this->red, $this->green, $this->blue) = sscanf($this->color,"%02x%02x%02x");
//     }else{
//       list($this->red, $this->green, $this->blue) = array(0, 0, 0);
//     }
//   }

//   function getRed(){
//     return "red = " . $this->red;
//   }

//   function getGreen(){
//     return "green = " . $this->green;
//   }

//   function getBlue(){
//     return "blue = " . $this->blue;
//   }

// }

// $ourColor = new RGB("#2f4e50");
// $ourColor->readRGBColor();
// echo PHP_EOL;
// echo $ourColor->getRed();

// extends to child class from parent class
// class Fruit{
//   public $name, $color;

//   public function __construct($name, $color)
//   {
//     $this->name = $name;
//     $this->color = $color;
//   }
// }

// $apple = new Fruit("apple","red");

// printf("The value is %s\n",$apple->name);
// var_dump($apple->name);
// print_r($apple->color);


?>