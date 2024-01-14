<?php 
//create an interface
interface BaseAnimal{
  function isAlive();
  function canEat($params1, $params2);
  function breed();
}

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

?>