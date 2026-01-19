<?php

interface class1{
    function sum($a,$b);
}
interface class2{
    function sub($a,$b);
}

class class3 implements class1, class2{
    function sum($a,$b){
        echo $a + $b."<br>";
    }
    function sub($a,$b){
        echo $a - $b."<br>";
    }
}

$obj = new class3();
$obj->sum(10,5);
$obj->sub(20,5);

?>