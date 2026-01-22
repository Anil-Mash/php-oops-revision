<?php
class abc{

 public function __toString()
 {
    return "can't print object as a string of class:".get_class($this);
 }

}
$obj = new abc();
echo $obj;

?>