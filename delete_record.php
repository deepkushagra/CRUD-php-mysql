<?php
 $id=$_GET['id'];
 $con=mysqli_connect("localhost","root")or die("could not connect to the server");
 mysqli_select_db($con,"customer")or die("could not find the database");
 $sql="UPDATE customer SET customer.is_deleted=1 WHERE id=$id";
 mysqli_query($con,$sql);
 mysqli_close($con);
 header("location: index.php");
?>