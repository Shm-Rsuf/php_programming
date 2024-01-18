<?php
// trait message1{
//   public function msg1(){
//     echo "Hello, message1\n";
//   }
// }

// trait message2{
//   public function msg2(){
//     echo "Hello, message2\n";
//   }
// }

// class Class1{
// use message1;

// }

// class Class2{
//   use message1, message2;
// }

// $c1 = new Class1();
// $c2 = new Class2();


// $c1->msg1();
// $c2->msg1();
// $c2->msg2();

// trait hello{
//   public function sayHello(){
//     echo "Hello everyone!\n";
//   }

//   public function sayHi(){
//     echo "Hi everyone!\n";
//   }
// }

// trait bye{
//   public function sayBye(){
//     echo "Bye Bye everyone!\n";
//   }
// }

// class ClassHello{
//   use hello,bye;
// }

// class ClassBye{
//   use bye;
// }

// $hi = new ClassHello();

// $hi->sayHello();
// $hi->sayHi();
// $hi->sayBye();

/* trait property overriding */
// trait greet{
//   public function welcome(){
//     echo "I am from greet trait\n";
//   }
// }

// trait greet2{
//   public function welcome(){
//     echo "I am from greet2 trait\n";
//   }
// }

// class Test{
//   use greet,greet2{
//     greet:: welcome insteadOf greet2;
//   }
  
// }

// class newTest extends Test{
//   use greet;
//   public function welcome()
//   {
//     echo "I am from class new test\n";
//   }
// }

// $c1 = new Test();

// $c1->welcome();




?>