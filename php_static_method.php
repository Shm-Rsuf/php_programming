<?php 
// class ClassName{
//   public static function greet(){
//     echo "Hello world\n";
//   }
// }

// ClassName::greet();

// class Greetings{
//   public static function welcome(){
//     echo "Hi there, How are you!!\n";
//   }
// }

// Greetings::welcome();

// $g1 = new Greetings();
// $g1->welcome();

// class Greetings{
//   public static function welcome($name){
//     echo "Hey {$name}, How are you?\n";
//   }

//   public function __construct()
//   {
//     self::welcome("John");
//     self::welcome("Usuf");
//     self::welcome("Arif");
//     self::welcome("Jony");
//   }
// }

// new Greetings()

// class Domain{
//   protected static function getWebSiteName(){
//     return "W3Schools.com";
//   }
// }

// class DomainW3 extends Domain{
//   public $domainName;

//   public function __construct(){
//     $this->domainName = parent::getWebSiteName();
//   }
// }

// $domainW3 = new DomainW3();

// echo $domainW3->domainName;

/* Static Properties in Php */
// class Pi{
//   public static $PI = 3.1416;
// }


// var_dump(PI::$PI);
// echo Pi::$PI;

// class Pi{
//   public static $piValue = 3.1416;

//   public function getPiValue(){
//     return self::$piValue;
//   }
// }

// $pi = new Pi();

// echo $pi->getPiValue();
// echo PHP_EOL;
// echo Pi::$piValue;


?>