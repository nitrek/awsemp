<?php
$servername = "rds-server-team-03.ca5qg3gmjo0i.us-west-2.rds.amazonaws.com";
$username = "team03";
$password = "team123456";
/*
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
*/
//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password) 
 or die("Unable to connect to MySQL");
echo "Connected to MySQL<br>";

//select a database to work with
$selected = mysql_select_db("employeedb",$dbhandle) 
  or die("Could not select examples");

echo $_POST["firstname"];
echo $_POST["ID"];
echo $_POST["email"];
echo $_POST["dept"];

//INSERTING DATA
//SQL QUERY 1
$sql = "INSERT INTO tbl_EmployeeDetails(employee_name,employee_email_id,department ) VALUES ($_POST["firstname"],$_POST["email"],$_POST["dept"]);";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
//execute the SQL query and return records
$result = mysql_query($sql);
echo $result;
//SELECTING DATA


?>