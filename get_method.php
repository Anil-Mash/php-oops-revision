<?php 
class abc{
private $name ="saini";

public function __get($name)
{
    echo "You are trying to access not existing or private property($name)";
}
}

$obj = new abc();
$obj->name;


?>