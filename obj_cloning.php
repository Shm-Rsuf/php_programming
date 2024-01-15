<?php 
// class MyClass{
//   public $color;
//   public $amount;

  // public function __construct($color, $amount)
  // {
  //   $this->color = $color;
  //   $this->amount = $amount;
  // }

// }

// $obj = new MyClass();
// $obj->color = "red";
// $obj->amount = 5;

// $copyObj = clone $obj;
// $copyObj->color = "green";

// print_r($obj);
// print_r($copyObj);

// class Color{
//   public $color;

//   public function __construct($color)
//   {
//     $this->color = $color;
//   }

//   public function setColor($color){
//     $this->color = $color;
//   }
// }

// class FavColor{
//   public $data;
//   public $color;

//   function __construct($data, $color)
//   {
//     $this->data = $data;
//     $this->color = new Color($color);
//   }

//   public function updateColor($color){
//     $this->color-> setColor($color);
//   }

//   function __clone()
//   {
//     $this->color = clone $this->color;
//   }

// }

// $f1 = new FavColor("data","red");
// $f2 = clone $f1;

// $f2->updateColor("green");


// print_r($f1);
// echo "================\n";
// print_r($f2);


// class Color{
//   public $color;

//   public function __construct($color)
//   {
//     $this->color = $color;
//   }

//   public function setColor($color){
//     $this->color = $color;
//   }
//   function __toString()
//   {
//     return $this->color;
//   }
// }

// $red = new Color("red");
// $green = new Color("green");

// echo "This color is {$red}\n";
// echo "This color is {$green}\n";



?>