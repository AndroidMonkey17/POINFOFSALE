
     <?php require 'login.php';?>

     <?php

        //execute the SQL query and return records

	$query =mysqli_query ($con,"DELETE FROM employee WHERE AccountID='".$_POST['accID']."'");
	
	$query1=mysqli_query($con,"DELETE Password, Status FROM account WHERE AccountID='".$_POST['accID']."'");
	
        //fetch tha data from the database

	         if($query AND $query1){
	
	              header( 'location: Delete.php' ) ;
	
}
                else{
	
		echo "<br> Error !!I cant' delete the account :(";
	
}

?>