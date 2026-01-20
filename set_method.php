<?php 
class abc{
private $name;

public function __get($property)
{
    echo "You are trying to access not existing or private property($property)";
}
public function __set($property, $value)
{
    echo "This is not existing or private property : $property";
}
}

$obj = new abc();
$obj->name ="Saini";


?>