<?php

// $students = array("Atik", "Jony", "Arif", "Alia", "Mitu");

// array_push = set an element to last index
// array_push($students, "Alia", "Mitu");
// $students[count($students)]="Momin";
// $students[count($students)]="Messi";

// $lastEl = $students[count($students)-1];
// echo "Last El = {$lastEl}\n";

// print_r($students);

// array_pop = remove an element from the last index
// $popEl1 = array_pop($students);
// $popEl2 = array_pop($students);

// echo "popEl1 = {$popEl1}\npopEl2 = {$popEl2}\n";

// array_unshift = set an element to first index
// array_unshift($students, "Rumi", "Rafi", "usuf");

// array_shift = remove an element from the first index
// $studentName3 = array_shift($students);
// $studentName4 = array_shift($students);
/* ===================================== */
// $students = array("Atik", "Jony", "Arif", "Alia", "Mitu");

// $len = count($students); // count fn array er length count kore

// for ($i=0; $i < $len; $i++) { 
//   echo $i+1 . " -> " . $students[$i] . "\n";
// };

/* Associative Arrays In Php */
// $car = [ "brand"=>"Ford", "model"=>"Mustang", "year"=>1964];
/* to change the value of associative array in php */
// $car["year"]= 1990;
// $car["brand"]="Lamborghini";

// var_dump($car); // var_dump data type bole dey
  // var_dump( null ?? "Hello"); //shudhu "null" hole dane jabe
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

// $foods = [
//   "vegetables" => "brinjal, carrot, cucumber",
//   "fruits" => "apple, banana",
//   "drinks" => "water, milk",
// ];

// $foods['drinks'] = $foods['drinks'] . ", orange juice, milk sheik";
// $foods['drinks'] .= ", orange juice, milk sheik";

// print_r($foods);

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

/* Sorting Arrays */
// $fruits = ["lemon", "orange", "banana", "apple"];

// sorted by ascending ordered

// sort($fruits);
// $len = count($fruits);

// for ($i=0; $i < $len; $i++) { 
//   echo $fruits[$i]. "\n";
// };

// echo "========== \n";

// for ($i=0; $i < $len; $i++) { 
//   echo $fruits[$i]. "\n";
// };

// sorted by descending ordered

//  rsort($fruits);

// $len = count($fruits);

// for ($i=0; $i < $len; $i++) { 
//   echo $fruits[$i]. "\n";
// };

// echo "========== \n";

// for ($i=0; $i < $len; $i++) { 
//   echo $fruits[$i]. "\n";
// };

// sorted associated array ascending ordered acording to the value
// $fruits = ["1" => "lemon", "2" => "orange", "3" => "banana", "4" => "apple"];

//  asort($fruits);

// foreach ($fruits as $key => $value) {
//   echo "fruit[" . $key . "]" . " = " . $value . "\n";
// }

// echo "========== \n";

// foreach ($fruits as $key => $value) {
//   echo "fruit[" . $key . "]" . " = " . $value . "\n";
// }

// sorted associated array descending ordered acording to the key
// $fruits = ["1" => "lemon", "2" => "orange", "3" => "banana", "4" => "apple"];

//  ksort($fruits);

// foreach ($fruits as $key => $value) {
//   echo "fruit[" . $key . "]" . " = " . $value . "\n";
// }

// echo "========== \n";

// foreach ($fruits as $key => $value) {
//   echo "fruit[" . $key . "]" . " = " . $value . "\n";
// }



?>