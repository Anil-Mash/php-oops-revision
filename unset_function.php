<?php 

class abc{
    public $name ="Anil";
    private $course ="MCA";

    public function __unset($property)
    {
        unset($this->$property);
    }
}

$obj = new abc();

unset($obj->course);
print_r($obj);


?>