<?php
$servername = "rds-server-team-03.ca5qg3gmjo0i.us-west-2.rds.amazonaws.com";
$username = "team03";
$password = "team123456";
$dbname = "employeedb";

$con = mysqli_connect($servername,$username,$password,$dbname) or die("Some error occurred during connection " . mysqli_error($con));  
$firstname ="test";
$email = "test1";
$dept = " dds";
if(isset($_POST['firstname']))
$firstname =$_POST['firstname'];
if(isset($_POST['email']))
$email =$_POST['email'];
if(isset($_POST['dept']))
$dept = $_POST['dept'];
$strSQL = "INSERT into tbl_EmployeeDetails(employee_name,employee_email_id,department) VALUES ('$firstname','$email','$dept')";
echo $strSQL;

$query = mysqli_query($con, $strSQL);
if($query)
{
  echo "success";
}

// Close the connection
mysqli_close($con);
?>