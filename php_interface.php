<?php 
//create an interface
// interface BaseAnimal{
//   function isAlive();
//   function canEat($params1, $params2);
//   function breed();
// }

//create a class
// class Animal implements BaseAnimal{
//   function isAlive(){}
//   function canEat($params1, $params2){}
//   function breed(){}
// }
//create another interface
// interface BaseHuman extends BaseAnimal{
//   function canTalk();
// }

//create another class
// class Human implements BaseHuman{
//   function isAlive(){}
//   function canEat($params1, $params2){}
//   function breed(){}
//   function canTalk(){}
// }

// $h1 = new Human();
// $cat = new Animal();

// echo $h1 instanceof BaseAnimal ? "yes\n" : "no\n";
// echo $cat instanceof BaseHuman ? "yes\n" : "no";

// class DistrictCollection implements IteratorAggregate{
//   public $districts;

//   public function __construct()
//   {
//     $this->districts = [];
//   }

//   public function add($district){
//     districtsay_push($this->districts, $district);
//   }

//   public function  getIterator() {
//     return new districtsayIterator($this->districts);
//  }

// }

// $districts = new DistrictCollection();

// $districts->add("Bogura");
// $districts->add("Dhaka");
// $districts->add("Rajshahi");

// print_r($districts);

// foreach($districts as $district){
//   echo $district . "\n";
// }

// class myIterator implements IteratorAggregate, Countable{
//   public $districts;
//   public function __construct() {
//      $this->districts = array("Bogra","Rajshahi");
//   }

//   public function add($district){
//         array_push($this->districts, $district);
//       }

//   public function getIterator() {
//      return new ArrayIterator($this->districts);
//   }

//   public function count()
//   {
//     return count($this->districts);
//   }

// }
// $obj = new myIterator();
// $obj->add("Rangpur");

// echo "The count value is " . count($obj) . "\n";

// foreach($obj as $value) {
//   echo $value . "\n";
// }

?>