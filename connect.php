<?php
$DATABASE_TYPE ='mysql';
$SERVER = 'localhost';
$USERNAME = 'root';
 $PASSWORD= '';
 $DATABASE='employeedb';
$conn = mysqli_connect($SERVER,$USERNAME,$PASSWORD,$DATABASE) or die("Some error occurred during connection " . mysqli_error($con));  
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>