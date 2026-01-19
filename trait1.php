<?php 
trait Hello {
    public function sayHello() {
        return "Hello from Trait!";
    }
}

class base {
    public function sayHello() {
        return "Hello from Base Class!";
    }
}

class child extends base {
    use Hello;

    public function sayHello()
    {
        return "Hello from Child Class!";
    }
}
$obj = new child();
echo $obj->sayHello();
?>