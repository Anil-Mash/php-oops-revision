<?php
class main{
    
    public function first(){
    echo "this is main class\n";
    return $this;
    }

    public function second(){
    echo "this is second class\n";
    return $this;
    }

    public function third(){
    echo "this is third class\n";
    return $this;
    }
    
}

$obj = new main;
$obj->first()->second()->third();
?>
