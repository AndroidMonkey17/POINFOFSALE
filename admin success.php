
     <?php require 'login.php';?>

     <?php

         $stat=$_POST['stat'];

             if(isset($stat) and $stat=="submit"){

                 $status=$_POST['status'];

	             $status_value="$status";
				 
}

        //execute the SQL query and return records

		 $result = mysqli_query($con,"Insert into administrator values ('".$_POST['accID']."','".$_POST['pass']."','".$status_value."')");

        //fetch tha data from the database

	         if($result){
	
	              header( 'location: receipt.php' ) ;
	
}
                else{
	
		echo "<br> AccountNo / UserName already exist";
	
}

?>