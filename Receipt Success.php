<html>	
<body>

  <link rel="stylesheet" href="css/receipt_style.css">

 <div id="header">
 
            <h1> JMC FastFood Chain </h1>
 
        </div>
		   <div id="body2">

	             <table cellspacing="5">

					 <td><th> <a href="receipt.php">Receipt</a> </th></td>
                     <td><th> <a href="index.php">Log out</a> </th></td>
					 
				 </table>
        </div>
	<div id="table1">	
	<?php require 'login.php';?>

    <?php
	
	$query = "SELECT ProductCode, ProductName, Price FROM product WHERE ProductCode='".$_POST['Pcode']."' "; //You don't need a ; like you do in SQL
$result = $con->query($query);

echo"<center><br><br><br>";
echo'<table border="1"width="100%"><th>ProductCode</th><th>ProductName</th><th>Price</th><th>Quantity</th>';

while($row=$result->fetch_assoc())
{
  echo'<tr><td>'.$row['ProductCode'].'</td><td>'.$row['ProductName'].'</td><td>'.$row['Price'].'</td><td>'.$_POST['Quantity'].'</td></tr>';
}

?>
<div id="body1">
<fieldset>
<?php
	
   $total=0;
   $change=0; 
   
	echo"Your Cash is :" .$_POST['cash'];
	echo"<br>";
	echo"<br>";


$total = $row['Price'] * $_POST['Quantity'];

echo"Your Total Amount is :" .$total;

echo"<br><br>";

$change = $_POST['cash'] - $total;

echo"Your Change is : " .$change;
	echo"<br>";



?>
</fieldset>
</div>
<br>

</body>
</html>