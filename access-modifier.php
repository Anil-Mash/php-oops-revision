<?php 
class base{
    //public $name;
    //protected $name;
    private $name;

    public function __construct($name){
        $this->name = $name;
    }

    //public function showName(){
    //protected function showName(){
    public function showName(){
        echo "Name: ".$this->name;
    }
    
}

class derived extends base{
    public function showName(){
        echo "Derived Name: ".$this->name;
    }
}

// $obj = new base("Guest User");
// $obj->showName();

//$obj2 = new derived("Admin User");
//$obj2->showName();

$obj3 = new base("Super User");
$obj3->showName();
?>
