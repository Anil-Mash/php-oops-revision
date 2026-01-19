<?php 

class base{
    public static $name = "Base Class";
    public static function getName(){
        echo self::$name . "<br>";
        echo static::$name ."<br>";
    }
}
class child extends base{
    public static $name = "Child Class";    
}
$obj = new child();
$obj->getName();
?>