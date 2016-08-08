<?php
require 'connect.php';
if(isset($_POST["firstname"]))
{
	$firstname = $_POST["firstname"];
	$qu = "SELECT * FROM emp_details WHERE name ='$firstname' ";
	$result =mysqli_query($conn, $qu);
		while($row = mysqli_fetch_assoc($result)){
    foreach($row as $cname => $cvalue){
        print "$cname: $cvalue\t";
         print "\n";
    }
    echo "<br>";
}
}
echo "<br>";
if(isset($_POST["ID"]))
{
	//echo $_POST["ID"]+"ds";
	$id = $_POST['ID'];
	$qu = "SELECT * FROM emp_details WHERE id ='$id' ";
	$result = mysqli_query($conn, $qu);
	//echo $qu;
	while($row = mysqli_fetch_assoc($result)){
    foreach($row as $cname => $cvalue){
        print "$cname: $cvalue\t";
         print "\n";
    }
    echo "<br>";
}
}
echo "<br>";
if(isset($_POST["dept"]))
{
	$dept = $_POST["dept"];
	$qu = "SELECT * FROM emp_details WHERE dept ='$dept' ";
	$result = mysqli_query($conn, $qu);
		while($row = mysqli_fetch_assoc($result)){
    foreach($row as $cname => $cvalue){
        print "$cname: $cvalue\t";
         print "\n";
    }
    echo "<br>";
}
}
?>