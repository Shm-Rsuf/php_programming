<?php 

// function callByRef(&$value){
//   return $value+=5;
// }

// $sum = 2;
// callByRef($sum);
// echo $sum;
// echo PHP_EOL;

/* Variable Number of Arguments */
// function myFunction(...$x){
//  $result = 0;
//  for($i = 0; $i<count($x); $i++){
//   $result+= $x[$i];
//  }
//  return $result;
// }

// $answer1 = myFunction(2, 4, 7, 3, 4);
// $answer2 = myFunction(2, 4, 1, 3, 4);

// echo "The answer is : {$answer1} \n";
// echo "The answer is : {$answer2} \n";

function addNumbers(float $a, float $b) : float {
  return $a + $b;
}
echo addNumbers(1.2, 5.2);



?>