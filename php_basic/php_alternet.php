<?php 
$n = 11;
$bool = $n % 2;

if($n % 2 == 0):
  echo "{$n} is an even number";
  echo PHP_EOL;
  echo "Some code is here";

else:
  echo "{$n} is an odd number";
  echo PHP_EOL;
  echo "Some code is here";

endif;

echo PHP_EOL;

switch ($bool):
  case 0:
    echo "Even number";
    echo PHP_EOL;
    break;
  
  default:
    echo "Odd number";

  endswitch;

?>