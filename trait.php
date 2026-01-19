<?php 

trait hello{
    public function sayHello(){
        echo "Hello from Trait!\n";
    }

    public function sayHi(){
        echo "Say Hi from Trait!\n";
    }
}

trait goodbye{
    public function sayGoodbye(){
        echo "Goodbye from Trait!\n";
    }
}

class Greeting{
    use hello, goodbye;
}

class Farewell{
    use goodbye;
}

$greet = new Greeting();
$greet->sayHello();
$greet->sayHi();
$greet->sayGoodbye();

$farewell = new Farewell();
$farewell->sayGoodbye();
?>