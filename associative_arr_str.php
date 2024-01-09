<?php 
$student = [
  "fName" => "john",
  "lName" => "doe",
  "age" =>20,
  "section" => "B"
];

// print_r($student);
// echo $student["fName"] . " " . $student["lName"] . "\n";
// printf("%s %s",$student["fName"], $student["lName"]);

/* associative array to serialize & unserialized data */
// $serialized = serialize($student);
// echo $serialized;
// echo "\n";

// $newStudent = unserialize($serialized);
// print_r($newStudent);

// $jsonData = json_encode($student);
// print_r($jsonData);
// echo "\n";

// echo "====== \n";

// $studer2 = json_decode($jsonData,true);
// print_r($studer2);


?>