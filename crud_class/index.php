<?php
include_once 'database.php';

$obj = new Database();

//Insert Data into database

// $obj->insert('student', array(
//     'student_name' => 'johny',
//     'age' => 24,
//     'city' => 'NYC York'
// ));
// $results = $obj->getResult();
// echo "Database Results: <br>";
// print_r($results);

//Insert Data into database

// $obj->update('student', array(
//     'student_name' => 'Raman Gupta',
//     'age' => 25,
//     'city' => 'Goa'
// ), "id = 6");
// $results = $obj->getResult();
// echo "Database Results: <br>";
// print_r($results);/

//Delete Data into database
// $obj->delete('student', "id = 6");
// $results = $obj->getResult();
// echo "Database Results: <br>";
// print_r($results);

//Select Data into database
// $obj->select('student', "id = 6");
// $results = $obj->getResult();
// echo "Database Results: <br>";
// print_r($results);


//Select Raw Sql into database
// $obj->rawQuery("SELECT * FROM student WHERE id = 7");
// $results = $obj->getResult();
// echo "Database Results: <br>";
// print_r($results);

//SelectSql into database
$obj->select("student","student_name,city",null,"age = '20'","student_name",'2');
$results = $obj->getResult();
echo "Database Selected Results: <br>";
print_r($results);

?>