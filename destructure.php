<?php
class hello{

public function __construct()
{
    echo "hello Constructor\n";
}

public function hello(){
    echo "This is Hello Function\n";
}

public function __destruct()
{
    echo "This Is Destructor Method\n";
}
}

$obj = new hello();
$obj->hello();

?>