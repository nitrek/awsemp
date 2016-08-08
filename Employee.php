<?php
$servername = "rds-server-team-03.ca5qg3gmjo0i.us-west-2.rds.amazonaws.com";
$username = "team03";
$password = "team123456";
$dbname = "employeedb";

$conn = mysqli_connect($servername,$username,$password,$dbname);
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
echo "Connected successfully";

echo $_POST["firstname"];
echo $_POST["ID"];
echo $_POST["email"];
echo $_POST["dept"];


//INSERTING DATA
$sql = "INSERT INTO tbl_EmployeeDetails(employee_name,employee_email_id,department ) VALUES ($_POST["firstname"],$_POST["email"],$_POST["dept"]);";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>