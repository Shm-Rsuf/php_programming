<?php 
// $str = 'Hello text   
// multiple line  
// text within single quoted string';
// $str = 'Using double "quote" directly inside single quoted string';
// $str = 'Using escape \'sequences\' in \\single\\ quoted string';
// $str = "Hello text   
// multiple line  
// text within double quoted string";  

// $str = "Using double \"quote\" with \tbackslash inside double quoted string";

// $name = 'Md. usuf ali';

// $str = "My full name is {$name}";

/* specifing string with heredoc system */

// $str = <<<DEMO
// this is 
// $name
// from islamic university, kushtia
// DEMO;

// echo $str;

/* Accessing charecter within a string in php */
// $str = "  hello world.How are you!   ";
// echo trim($str);

// $newStr = str_ireplace("world", "bangladesh", $str, $count);

// echo $newStr;
// echo PHP_EOL;
// echo $count;

// $keywords = preg_split("/[\s,]+/", "hypertext language, programming,php");

// $len = count($keywords);

// for ($i=0; $i < $len; $i++) { 
//   print_r($keywords[$i]);
//   echo "\n";
// }



// $result_array = preg_split( "/[ |,]/", $str );
// $len = count($result_array);

// echo $len;
// echo PHP_EOL;

// for($i = 0; $i < $len; $i++){
//   echo $result_array[$i] . "\n";
// }

// echo PHP_EOL;
// print_r($result_array);

// breaking a stirng in php
// $parts = explode(" ",$str);
// for ($i=0; $i <count($parts) ; $i++) { 
//  echo strrev($parts[$i]) . "\n";
// }

//reverse string
// $strLen = strlen($str);

// for ($i=$strLen-1; $i >=0 ; $i--) { 
//   echo $str[$i];
// }

// for ($i=1; $i <=$strLen ; $i++) { 
//   echo $str[$i * (-1)];
// }

// $subStr = substr($str,2,2);
// $subStr = substr($str,0,-2);
// $subStr = substr($str,-5,-2);
// echo $subStr;
// $charArr = [];

// $sngEl1 = $str[0];
// $sngEl2 = $str[5];
// $sngEl3 = $str[-1];

// printf("%s %s %s \n", $sngEl1, $sngEl3, $sngEl2);

// for ($i=1; $i < strlen($str); $i++) {
//   if($i % 2 == 0){
//     array_push($charArr,$str[$i]);
//     echo $str[$i] . "\n";
//   }
// }

// print_r($charArr);

// use of sscanf in php
// $name = "usuf ali 9876543210";

// sscanf($name, "%s %s %s",$fName, $mName, $phone);

// // echo $fName . "\n";
// // echo $mName . "\n";

// $newPhone = str_split($phone);
// print_r($newPhone);
// echo "\n";

// $value = mt_rand(0,9);
// echo $value;
// echo "\n";

// echo $newPhone[$value];



?>