<?php
class student{
    private static function hello(){
        echo "this is a static hello method";
    }

    public static function __callStatic($name, $arguments)
    {
       
        echo "This is a Private method: $name";
    }
}

student::hello();
?>