<?php 
class name{
private $fname, $lastname;

private function showName($fname,$lastname){
    $this->fname = $fname;
    $this->lastname = $lastname;
}

public function __call($methodname, $arguments)
{
    echo "call not existing or private medhod: $methodname";
    print_r($arguments);
}
}

$obj = new name();
$obj->showName("anil","saini");

?>