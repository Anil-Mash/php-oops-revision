<?php 
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "opps_testing"; 
 $conn = new mysqli($servername, $username, $password, $dbname); 
 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error); 
  } 
  //echo "Connected successfully";

  $query = "SELECT * FROM student"; 
  $result = $conn->query($query); 
  if ($result->num_rows > 0) { 
    while($row = $result->fetch_assoc()){ 
        echo  $row["id"]. " - Name: " . $row["student_name"]. " - Age: " . $row["age"].  " - City: " . $row["city"]. "<br>"; } 
    } 
    else { 
        echo "0 results";
    } 
    
    $conn->close();


?>