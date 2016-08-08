<?php
$DATABASE_TYPE ='mysql';
$SERVER = 'localhost';
$USERNAME = 'root';
 $PASSWORD= '';
 $DATABASE='employeedb';
$conn = mysqli_connect($SERVER,$USERNAME,$PASSWORD,$DATABASE) or die("Some error occurred during connection " . mysqli_error($con));  
// Check connection
echo "Connected successfully";
?>