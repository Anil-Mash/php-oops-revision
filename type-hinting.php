<?php 
 function fruits(array $names ){
    foreach ($names as $name) {
        echo $name . "\n";
    }
 }
$fruitNames = ["Apple", "Banana", "Cherry"];
fruits($fruitNames);
?>