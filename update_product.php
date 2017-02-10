<html>
<body>


<form action="update_product_success.php" method="POST">
<div id="header">
 <h1> Update Account.... </h1>
 </div>
 <div id="body">
<table cellspacing="5">
<td><th> <a href="reg_form.php">Employee Register </a> </th></td>
<td><th> <a href="account_form.php">Account Register </a> </th></td>
<td><th> <a href="product_form.php">Product </a> </th></td>
<td><th> <a href="update_account.php">Update Account</a> </th></td>
<td><th> <a href="receipt.php">Receipt</a> </th></td>
<td><th> <a href="index.php">Log out</a> </th></td>
</table>
</div>
<br><br><br>
<center>
<input class="textbox" type="text" name="Pcode"placeholder="P R O D U C T C O D E" required autofocus><br></br>
<input class="textbox" type="text" name="Quantity"placeholder="      Q U A N T I T Y">

<br>
<input class="button" type='submit' name='Submit' value='Submit' /><br></br>
</center>
 <?php require 'login.php';?>
<?php

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

</body>
</html>