<?php

//echo "you are on the insert_customer.php file<br/>";
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$address = $_POST['address'];
$email = $_POST['email'];

//PHP database [MySQL] interaction in FIVE steps
//1. Create a database connection
$con=mysqli_connect("localhost","root","") or die("Could not connect to the server");
	
mysqli_select_db($con,"customer") or die("could not find the database");
//echo "you have successfully connected to server and selected the database"
//3. Perform database query
$sql="INSERT INTO customer (firstname, lastname,address,email,is_deleted)
      VALUES
      ('$firstname','$lastname','$address','$email',0)";
	  $query=mysqli_query($con,$sql);
//4. Use returned data [if any]
//5. Close connection
mysqli_close($con);
header("location: index.php");

?>