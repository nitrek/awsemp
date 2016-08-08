<?php
require 'connect.php'; 
$firstname ="test";
$email = "test1";
$dept = " dds";
if(isset($_POST['firstname']))
$firstname =$_POST['firstname'];
if(isset($_POST['email']))
$email =$_POST['email'];
if(isset($_POST['dept']))
$dept = $_POST['dept'];
$strSQL = "INSERT into emp_details(name,email,dept) VALUES ('$firstname','$email','$dept')";
echo $strSQL;

$query = mysqli_query($conn, $strSQL);
if($query)
{
  echo "success";
}

// Close the connection
mysqli_close($conn);
?>