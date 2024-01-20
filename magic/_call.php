<?php
class base {
  private $fName;
  private $lName;

  private function getName($fName, $lName){
    $this->fName = $fName;
    $this->lName = $lName;
  }

  public function __call($name, $arguments)
  {
    if(method_exists($this, $name)){
      call_user_func_array([$this, $name],$arguments);
    }else{
      echo "This is not existing property";
    }
  }
}

$c1 = new base();

$c1->getName("usuf", "ali");
// $c1->getname("usuf", "ali");

print_r($c1);




?>