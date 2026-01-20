<?php 
require 'namespace1.php';
require 'namespace2.php';

use pro\test\command as cmd;

function show(){
    echo "this is main class\n";
}

$obj = new cmd\product();
$obj1 = new main\product();

show();

cmd\show()

?>