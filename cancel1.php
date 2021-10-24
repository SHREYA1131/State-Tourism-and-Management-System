<?php

$con=mysqli_connect("localhost","root","");

if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysqli_select_db($con,'Tourism-Management-System---PHP-master')or die("Connection Failed to select database");

$id=$_POST['package_id'];
$name=$_POST['customer_name'];

echo"Booking cancelled";

$sql="DELETE FROM booking WHERE customer_name='$name' and package_id='$id' ";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }

mysqli_close($con);
?>