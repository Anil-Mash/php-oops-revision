<?php

class person{
    public $name;
    public $age;

    function __construct($name ="no name", $age=18)
    {
        $this->name = $name;
        $this->age = $age;
        return $this->name."-". $this->age."<br>";
    }

    function display(){
        return "Name: ".$this->name. " Age: ".$this->age;
    }
}

$obj1 = new person("Alice", 25);
echo $obj1->display()."<br>";
$obj2 = new person();
echo $obj2->display()."<br>";
?>