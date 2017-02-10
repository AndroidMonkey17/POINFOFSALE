
<?php require 'login.php';?>
<?php


$todo=$_POST['todo'];


if(isset($todo) and $todo=="submit"){


     $month=$_POST['month'];

     $dt=$_POST['dt'];

     $yr=$_POST['yr'];
    
	$date_value="$month/$dt/$yr";
}
         $gend=$_POST['gend'];

             if(isset($gend) and $gend=="submit"){

                 $gender=$_POST['gender'];

	             $gender_value="$gender";
			 }

//execute the SQL query and return records
$result = mysqli_query($con,"Insert into employee values ('".$_POST['accID']."','".$_POST['fname']."','".$_POST['mname']."','".$_POST['lname']."','".$_POST['age']."','".$date_value."','".$gender_value."','".$_POST['add']."','".$_POST['contactnumber']."')");



//fetch tha data from the database

	if($result){

	header( 'location: Account Form.php' ) ;
	
	}else{
	
		echo "<br> Error !! Can't Add Your Feelings :(";
	
	}

?>