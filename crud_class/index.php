<?php
include_once 'database.php';

$obj = new Database();

$obj->insert('student', array(
    'student_name' => 'johny',
    'age' => 24,
    'city' => 'NYC York'
));

$results = $obj->getResult();
print_r($results);

?>