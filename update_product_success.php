<html>
<body>


 
<?php require 'login.php';?>
 
 <?php



//execute the SQL query and return records
$result = mysqli_query($con,"SELECT FROM product ADD Quantity WHERE ProductCode = '".$_POST['Quantity']."' '+' '".$_POST['Pcode']."'");



//fetch tha data from the database

	if($result){
		echo"<br><br><br>";
		echo "<center><b>UPDATE SUCCESS<b></center>";

	
	}else{
	
		echo "<center><br> ERROR ADDING !!.....</center>";
	
	}

	

//execute the SQL query and return records
$query = "SELECT * FROM product"; //You don't need a ; like you do in SQL
$result = $con->query($query);

echo"<center><br>";
echo'<table border="1"cellspacing="1"><th>ProductCode</th><th>ProductName</th><th>Price</th><th>Quantity</th>';

while($row=$result->fetch_assoc())
{
  echo'<tr><td>'.$row['ProductCode'].'</td><td>'.$row['ProductName'].'</td><td>'.$row['Price'].'</td><td>'.$row['Quantity'].'</td></tr>';
}
echo'</table>';
echo"</center>";
?>	

<center>
<br><br>

<a href="update_product.php">Back to Update
<br><br>
<a href="index.php">Go Back</a>
</center>
	</form>
</body>
</html>	