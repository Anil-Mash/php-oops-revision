<?php

class parentClass {
    public static $staticVar = "I am a static variable from parentClass.";

    // public static function staticMethod() {
    //     echo self::$staticVar;
    // }
}

class derived extends parentClass{

 public static function staticMethod() {
        echo parent::$staticVar;
    }
}
$obj = new derived();
$obj->staticMethod();
// echo parentClass::$staticVar;
// echo "<br>";
// parentClass::staticMethod();

?>