<?php

$id=$_GET['id'];
$con=mysqli_connect("localhost","root")or die("could not connect the server");
mysqli_select_db($con,"customer")or die("could not find the database");
$sql="select * from customer where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
echo"<h3>you are about to delete the below data</h3>";
echo "id :<b>".$row['id']."</b><br/>";
echo "firstname :<b>".$row['firstname']."</b><br/>";
echo "lastname :<b>".$row['lastname']."</b><br/>";
echo "address :<b>".$row['address']."</b><br/>";
echo "email :<b>".$row['email']."</b><br/>";
echo "<b>ARE YOU SURE YOU WANT TO DELETE IT</b>";
echo "<a href=\"delete_record.php?id=".$row['id']."\">+yes+</a>";
echo "<a href=\"index.php\">+no+</a>";
mysqli_close($con);
?>