<?php 
abstract class parentClass{
    protected $name;
    abstract protected function calc($a,$b);
    
}

class childClass extends parentClass{
    public $name;
    public function calc($a,$b){
        echo "Sum: ".$a+$b;
    }
}
$obj1 = new parentClass();

$obj = new childClass();
echo $obj->calc(40,20);
?>

