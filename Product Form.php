<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product | Point of Sale</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
     
    <link rel="shortcut icon" href="images/ico/SE.ico">
	
	<form action="Product Form Success.php" method="POST">
    
</head><!--/head-->
<body>
	
	<div class = "row">
	<div class="fluid">
	<div class="headbg">
    <div class="brand">C.A.M.P | Fast Food Chain</div>
    <div class="address-bar">The Plaza | 1234 Del. Pilar St. | Busan, Butuan City 8600 | Block 5, Lot 33</div>
	</div>
	</div>
	</div>

	<div class = "row">
	<nav class="navbar navbar-inverse navbg">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="glyphicon glyphicon-retweet white"></span>
                </button>
                <a class="navbar-brand" href="home.html"><img src="images/logo.png" alt="logo"></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
				
                    <li><a href="home.php">Home</a></li>
                    
                    <li class="active"><a href="Product Form.php">Product</a></li>
                    <li><a href="Receipt.php">Receipt</a></li>
					       
							<li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> Register </a>
                        <ul class="dropdown-menu">
						<li><a href="Account Form.php"> Account Register</a></li>
                            <li><a href="Registration Form.php"> Register Information</a></li>
                            
                        </ul>
                    </li>
					<li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-cog"></span> Options </a>
                        <ul class="dropdown-menu">
                            <li><a href="Update Account.php"><span class="glyphicon glyphicon-save"></span> Update Account</a></li>
                            <li><a href="Delete.php"><span class="glyphicon glyphicon-trash"></span> Delete Employee</a></li>
							<li class="divider"></li>
                            <li><a href="privacy.html"> Accounts</a></li>
                        </ul>
                    </li>
                    <li><a href="index.php"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
					</ul>
            </div>
        </div>
		</nav>
		</div>
		
		<div class = "row">
		<div class="container">
		<div class="cont">
		<div class="label1">Register Employee</div>
		<div class="sublabel1">Please Fill Up All Boxes!</div>
		</div>
		</div>
		</div>
		
		
		<div class = "row">
		<div class="container">
		<div class="cont">
		<div class="container">
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        	<div class="panel panel-default">
        		<div class="panel-heading">
			    		<h3 class="panel-title">Register Here! <small>It's free!</small></h3>
			 			</div>
			 			<div class="panel-body">
			    		<form role="form">
			    			<div class="form-group">
			    				<input type="text" name="pcode" id="pcode" class="form-control input-sm" placeholder="Product Code">
			    			</div>
							
			    			<div class="form-group">
			    				<input type="text" name="pname" id="pname" class="form-control input-sm" placeholder="Product Name">
			    			</div>
										    			
							<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
										<input type="text" name="price" id="price" class="form-control input-sm" placeholder="Price">
			    					</div>
			    				</div>
								
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="text" name="quant" id="quant" class="form-control input-sm" placeholder="Quantity">
			    					</div>
			    				</div>
			    			</div>
			    			
			    			<input type="submit" value="Enter" class="btn btn-info btn-block">
			    		
			    		</form>
			    	</div>
	    		</div>
    		</div>
    	</div>
    </div>
		
		</div>
		</div>
		</div>
		
		
		
		<br>
		<div class = "row">
		<div class="fluid">
		<footer id="footer" class="footerbg">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2017 <a target="_blank" href="http://facebook.com/" title="Add me in facebook |albi.biol|">Albiol Comp.</a>. All Rights Reserved.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <div class="container text-center">
						<a href="http://facebook.com/"><i class="fa fa-facebook"></i></a> &nbsp &nbsp
						<a href="http://twitter.com/"><i class="fa fa-twitter"></i></a> &nbsp &nbsp
						<a href="https://plus.google.com/"><i class="fa fa-google-plus"></i></a> &nbsp &nbsp
						<a href="https://www.skype.com/en/"><i class="fa fa-skype"></i></a> &nbsp &nbsp
					</div>
                    </ul>
                </div>
            </div>
        </div>
		 </footer><!--/#footer-->
		</div>
		</div>
		
		 <?php require 'login.php';?>
<?php

//execute the SQL query and return records
$query = "SELECT * FROM product"; //You don't need a ; like you do in SQL
$result = $con->query($query);

echo"<center><br>";
echo'<table width="100%"border="1" ><th>ProductCode</th><th>ProductName</th><th>Price</th><th>Quantity</th>';

while($row=$result->fetch_assoc())
{
  echo'<tr><td>'.$row['ProductCode'].'</td><td>'.$row['ProductName'].'</td><td>'.$row['Price'].'</td><td>'.$row['Quantity'].'</td></tr>';
}
echo'</table>';
echo"</center>";
?>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>