<?php
$servername = "rds-server-team-03.ca5qg3gmjo0i.us-west-2.rds.amazonaws.com";
$username = "team03";
$password = "team123456";
$db = "employeedb";
// Check connection
$conn = mysqli_connect($servername,$username,$password,$db);
// Check connection
echo "Connected successfully";
?>