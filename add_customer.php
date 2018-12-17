<html>
<head>
<title>::add customer::</title>
</head>
<body>
<form action="insert_customer.php" method="POST">
<blockquote>
<p>
<h3>+ add new customer +</h3><br/>
firstname: <input type="text" name="firstname"/><br/>
lastname: <input type="text" name="lastname"/><br/>
address: <br/>
<textarea name="address" cols="25" rows="10"></textarea><br/>
email: <input type="text" name="email"/><br/>
<input type="submit" name="submit" value="save"/>
<input type="reset" name="reset" value="reset"/>
<input type="button" name="cancel" value="cancel" onclick="location.href='index.php'"/>
</p>
</blockquote>
</form>
</body>
</html>