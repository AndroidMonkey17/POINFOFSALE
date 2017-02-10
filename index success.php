
    <?php require 'login.php';?>


    <?php



//execute the SQL query and return records

         $result = mysqli_query($con,"SELECT * FROM account where AccountID = '".$_POST['accID']."' AND
	     
		 Password = '".$_POST['password']."'AND Status = 'Active'");
		 
		 $result1 = mysqli_query($con,"SELECT * FROM administrator WHERE AccountID='".$_POST['accID']."' AND Password = '".$_POST['password']."' AND Status = 'Active'");


//fetch tha data from the database

      if(mysqli_num_rows($result1)){

	  if($_POST['accID']=="17-ACI"){
	
		header( 'location: home.php' ) ;
	
}
}

elseif(mysqli_num_rows($result)){
if($_POST['accID'] && $_POST['password']){
	    header('location:receipt.php');
	}
}
	    else{
	
		header('location:index.php');
	
}
	
     mysqli_close($dbhandle);
	 
?>
