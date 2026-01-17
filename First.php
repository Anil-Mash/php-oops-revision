<?php
class calculation {
   public $a, $b, $c;

   function sum(){
    $this->c =$this->a+$this->b;
    return $this->c;
   }

   function sub(){
    $this->c =$this->a-$this->b;
    return $this->c;    
   }
}
$obj = new calculation();
$obj->a=10;
$obj->b=20;
echo "Sum: " . $obj->sum()."<br>";
echo "Sub: " . $obj->sub()."<br>";
?>