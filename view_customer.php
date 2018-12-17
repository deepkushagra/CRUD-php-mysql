<?php
//PHP database [MySQL] interaction in FIVE steps
//1. Create a database connection
$con=mysqli_connect("localhost","root","") or die("could not connect the server");
//2. Select a database to use
mysqli_select_db($con,"customer") or die("could not  find the database");
//3. Perform database query
$sql="SELECT * FROM customer WHERE is_deleted=0";
$result=mysqli_query($con,$sql);
   //4. Use returned data [if any]
   ?>
<html>
<head>
<title>::view customer detail::</title>
<style>
table,th,td{
	border:2px solid black;
	border-collapse:collapse;
    text-decoration:none;
	padding:5px;
	}
	a{
		text-decoration:none;
	}
</style>
</head>
<body>
<blockquote>
<h3>+ list of customer +</h3>
<table>
<?php
 //echo "you are on the view_customer.php";
   echo"<tr>
   <th>Firstname</th>
   <th>Lastname</th>
   <th>Address</th>
   <th>Email</th>
   </tr>";
   while($row=mysqli_fetch_assoc($result)){
	   echo "<tr>";
	   $str=$row['firstname'];
	   echo "<td><a href=\"edit_customer.php?id=".$row['id']."\">.$str.</a></td>";
	   echo "<td>" .$row['lastname']. "</td>";
	   echo "<td>" .$row['address']. "</td>";
	   echo "<td>" .$row['email']. "</td>";
	   echo "<td><a href=\"edit_customer.php?id=".$row['id']."\">+ edit + </a></td>";
	   echo "<td><a href=\"delete_customer.php?id=".$row['id']."\">+ delete + </a></td>";
       echo "</tr>";	   
   }
   //5. Close connection
mysqli_close($con);
?>
</table>
</blockquote>
<h3><a href="index.php"> home </h3>
</body>
</html>
