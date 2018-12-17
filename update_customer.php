<?php
$id=$_POST['id'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$address=$_POST['address'];
$email=$_POST['email'];

$con=mysqli_connect("localhost","root")or die("could not connect the server");
mysqli_select_db($con,"customer")or die("could not find the database");
$sql="UPDATE customer SET
        firstname='$firstname', lastname='$lastname', address='$address', email='$email'
		WHERE id=$id";
$result=mysqli_query($con,$sql);

mysqli_close($con);
header("location:index.php");
?>