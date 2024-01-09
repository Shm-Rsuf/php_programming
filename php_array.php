<?php

// $students = array("Atik", "Jony", "Arif");

// array_push = set an element to last index
// array_push($students, "Alia", "Mitu");
// $students[count($students)]="Momin";
// $students[count($students)]="Messi";

// array_pop = remove an element from the last index
// $studentName1 = array_pop($students);
// $studentName2 = array_pop($students);

// array_unshift = set an element to first index
// array_unshift($students, "Rumi", "Rafi", "usuf");

// array_shift = remove an element from the first index
// $studentName3 = array_shift($students);
// $studentName4 = array_shift($students);

// $len = count($students);

// for ($i=0; $i < $len; $i++) { 
//   echo $i+1 . "-> " . $students[$i] . "\n";
// };

/* Associative Arrays In Php */
// $car = array(
//   "brand"=>"Ford",
//   "model"=>"Mustang",
//   "year"=>1964
// );

// to change the value of associative array in php
// $car["year"]= 1990;
// $car["brand"]="Lamborghini";

// echo var_dump($car);
// echo var_dump($car["year"] ? "Hello" : "null");
// echo $car["year"] . "\n";
// echo $car["brand"];

/* Loop Through an Associative Array in php, we always use (foreach) loop*/
// foreach ($car as $key => $value) {
//   echo $key . " -> " . $value . "\n";
// };

// Declaring another way of array in php like all languages
// $numbers = [10, 30, 40, 50];
// echo $numbers[count($numbers) - 2];
// $foods = ["apples", "banana", "cherries", "drink"=>"water, milk"];

// echo $foods[count($foods) - 3] . "\n";
// echo $foods["drink"];

// function myFunction() {
//   echo "I come from a function!";
// };

// $myArr = ["Volvo", 15, "message" =>'myFunction'];

// $myArr["message"]();
// echo PHP_EOL;
// echo $myArr[count($myArr) - 2];

// $students = [
//   "1"=>"Hasan",
//   "2"=>"Usuf",
//   "10"=>"Atik",
//   "drinks"=>"Water, Milk",
// ];

// echo $students["drinks"];

$foods = [
  "vegetables" => "brinjal, carrot, cucumber",
  "fruits" => "apple, banana",
  "drinks" => "water, milk",
];

// echo $foods["drinks"];
// foreach ($foods as $key => $value) {
//   echo $key . " -> " . $value . "\n";
// }

// $keys = array_keys($foods);
// foreach ($keys as $key) {
//   echo $key . "\n";
// }

// $values = array_values($foods);

// foreach ($values as $value) {
//   echo $value . "\n";
// }


?>