<?php
//বাইরে কোনো isset() ফাংশন কল হলে __isset()  ফাংশন অটোমেটিক্যালি কল হয়ে যাবে।
class Student {
  public $course;
  private $fName;
  private $lName;

  public function setName($fName, $lName){
    $this->fName = $fName;
    $this->lName = $lName;
  }

  public function __isset($name)
  {
    echo isset($this->$name);
  }

}

$s = new Student();
$s->setName("usuf", "ali");

// echo isset($s->course);
echo isset($s->fName);




?>