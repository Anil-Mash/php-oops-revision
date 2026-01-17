<?php 
class base{
    public $name = "Parent User";

    public function showName(){
        echo "Parent Name: ".$this->name;
    }
    
}

class derived extends base{
    public $name = "Child User";
    public function showName(){
        echo "Derived Name: ".$this->name;
    }
}


$obj = new derived();
echo $obj->name;

echo "<br>";

$obj1 = new derived();
echo $obj1->showName();
?>
