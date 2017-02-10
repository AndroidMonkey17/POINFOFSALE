	
<?php require 'login.php';?>


<?php



//execute the SQL query and return records
$result = mysqli_query($con,"Insert into product values ('".$_POST['Pcode']."','".$_POST['Pname']."','".$_POST['Price']."','".$_POST['Quantity']."')");



//fetch tha data from the database

	if($result){
	
	header( 'location:receipt.php' ) ;

	
	}else{
	
		echo "<br> INVALID USERNAME OR PASSWORD";
	
	}
	
	
mysqli_close($dbhandle);
?>
