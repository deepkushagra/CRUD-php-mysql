<?php
$id = $_GET['id'];
$con=mysqli_connect("localhost","root") or die("could not connect the server");
mysqli_select_db($con,"customer")or die("could not find the database");
$sql="select * from customer where id=$id";
$result= mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
?>
<html>
<head>
<title></title>
</head>
<body>
<form method="POST" action="update_customer.php">
<blockquote>
<h3>+ record to edit +</h3>
id : <input type="text" name="id" value="<?php echo $row['id'];?>" readonly="readonly"/><br/>
firstname : <input type="text" name="firstname" value="<?php echo $row['firstname'];?>"/><br/>
lastname : <input type="text" name="lastname" value="<?php echo $row['lastname'];?>"/><br/>
address : 
<textarea name="address" cols="25" rows="10">
<?php echo $row['address'];?>
</textarea>
email : <input type="text" name="email" value="<?php echo $row['email'];?>"/><br/>
<input type="submit" name="submit" value="save"/>
<input type="button" name="cancel" value="cancel" onclick="location.href='index.php'">
</blockquote>
</form>
</body>
</html>
<?php
mysqli_close($con);
?>