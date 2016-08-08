<?php
$servername = "rds-server-team-03.ca5qg3gmjo0i.us-west-2.rds.amazonaws.com";
$username = "team03";
$password = "team123456";
$dbname = "employeedb";

$con = mysqli_connect($servername,$username,$password,$dbname) or die("Some error occurred during connection " . mysqli_error($con));  

$firstname =$_POST['firstname'];
$email =$_POST['email'];
$dept = $_POST['dept'];
$strSQL = "INSERT INTO tbl_EmployeeDetails(employee_name,employee_email_id,department ) VALUES ('".$_POST['firstname']."', '".$_POST['email']."', '".$_POST['dept']."')";
echo $strSQL;

//$query = mysqli_query($con, $strSQL);
if($query)
{
  echo "success";
}

// Close the connection
mysqli_close($con);
?>