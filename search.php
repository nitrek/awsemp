<?php
$servername = "rds-server-team-03.ca5qg3gmjo0i.us-west-2.rds.amazonaws.com";
$username = "team03";
$password = "team123456";

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
if(isset($_POST["firstname"]))
echo $_POST["firstname"];
if(isset($_POST["ID"]))
echo $_POST["ID"];
if(isset($_POST["dept"]))
echo $_POST["dept"];
?>