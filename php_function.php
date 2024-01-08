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

// function addNumbers(float $a, float $b) : float {
//   return $a + $b;
// }
// echo addNumbers(1.2, 5.2);

// function isEven($number)
// {
//   if($number % 2 == 0)
//   {
//     echo "{$number} is an even number! \n";
//   }else
//   {
//     echo "{$number} is an odd number! \n";
//   }
  
// }

// isEven(15);
// isEven(14);

// function sum($a, $b, $c): int{
//   return $a + $b + $c;
// }

// echo "The value is : ".sum(1, 4, 7);

/* Accepting unlimited parameter in php */

// function sum(...$numbers): float{
//   $res = 0;
//   for ($i=0; $i < count($numbers); $i++) { 
//     $res += $numbers[$i];
//   }
//   return $res;
// }

// echo sum(3.5,5,6,7,9);

/* recurtion and recursive function */

// function printN($number){
//   if($number > 5){
//     return;
//   }

//   echo "{$number} \n";
//   $number++;
//   printN($number);
// }

// printN(1);

// function print2($start, $end, $stepping = 1){
//   if($start > $end){
//     return;
//   }
//   echo $start;
//   echo PHP_EOL;
//   $start += $stepping;

//   print2($start, $end, $stepping);

// }

// print2(10, 15, 3);



?>