<?php 
/* copy by value and copy by reference */
// example of copy by value
$person = [
  "fName" => "Hello",
  "lName" => "World",
];

$newPerson = $person;

$newPerson["lName"] = "Plutu";


print_r($person);
print_r($newPerson);

$x = 5;

function increaseValue($n){
  return $n+=10;
}

increaseValue($x);
echo "the value of x = {$x} \n";

echo "=========== \n";

// example of copy by reference
$person = [
  "fName" => "Hello",
  "lName" => "World",
];

$newPerson = &$person;

$newPerson["lName"] = "Plutu";


print_r($person);
print_r($newPerson);

$m = 5;

function increaseValue2(&$number){
  return $number+=4;
}

increaseValue2($m);
echo "the value of m = {$m} \n";


?>