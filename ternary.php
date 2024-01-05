<?php 

$n = 10;

if(10 == $n)
{
  echo "The number is {$n}";
}else if(12 == $n)
{
  echo "The number is {$n}";
}else
{
  echo "The number is not 10 or 12";
}

echo "\n";

$ternary = (10 == $n) ? "Ten" : "Another number";
echo $ternary;



?>