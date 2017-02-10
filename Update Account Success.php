<html>
<body>
 <link rel="stylesheet" href="css/update_success_style.css">

<form action="insert.php" method="POST">

<div id="header">
 <h1> JMC FastFood Chain </h1>
 </div>
 <div id="table">
<?php require 'login.php';?>
 
 <?php

 $stat=$_POST['stat'];


if(isset($stat) and $stat=="submit"){

     $status=$_POST['status'];

	$status_value="$status";
}



//execute the SQL query and return records
$result = mysqli_query($con,"Update account SET STATUS = '".$status_value."' WHERE AccountID = '".$_POST['accID']."'");



//fetch tha data from the database

	if($result){
	    
		echo"<br><br><brs>";
		echo"Update Success ...";

	
	}else{
	
		echo "<bt> INVALID USERNAME/PASSWORD";
	
	}

	
//execute the SQL query and return records
$query = "SELECT * FROM account"; //You don't need a ; like you do in SQL
$result = $con->query($query);

echo"<center><br>";
echo'<table cellspacing="1" border="1" width="50%"><th>AccountID</th><th>Password</th><th>Status</th>';



             while($row=$result->fetch_assoc())
{
  echo'<tr><td>'.$row['AccountID'].'</td><td>'.$row['Password'].'</td><td>'.$row['Status'].'</td></tr>';
}
echo'</table>';
echo"</center>";

?>	
</div>
<center>
<br><br>
<div id="body1">
<a href="update_account.php">Back to Update
</div>
</center>
	</form>
</body>
</html>	