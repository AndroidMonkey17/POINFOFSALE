<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Register | Point of Sale</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
     
    <link rel="shortcut icon" href="images/ico/SE.ico">
	
  <form action="Registration Form Success.php" method="POST">
    
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
                    
                    <li><a href="Product Form.php">Product</a></li>
                    <li><a href="Receipt.php">Receipt</a></li>
					       
							<li class="active" class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> Register </a>
                        <ul class="dropdown-menu">
                            
                            <li><a href="Account Form.php"> Account Register</a></li>
											<li class="active"><a href="Registration Form.php"> Register Information</a></li>
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
			    				<input type="text" name="acc_id" id="acc_id" class="form-control input-sm" placeholder="Account ID">
			    			</div>
							<div class="row">
			    				<div class="col-xs-5 col-sm-5 col-md-5">
			    					<div class="form-group">
			                <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="First Name">
			    					</div>
			    				</div>
								<div class="col-xs-3 col-sm-3 col-md-3">
			    					<div class="form-group">
			                <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="M.I.">
			    					</div>
			    				</div>
<div class = "col-sm-3">
								<table>

				     Status <select class="gender" name=status value=''></option>

	    <div id="genderbox">

		             <option value='Male'>Male</option>

					 <option value='Female'>Female</option>

        </div>

                 </table>
								</div>								
			    			</div>
										    			
							<div class="row">
			    				<div class="col-xs-5 col-sm-5 col-md-5">
			    					<div class="form-group">
			                <input type="text" name="last_name" id="last_name" class="form-control input-sm" placeholder="Last Name">
			    				</div>
								</div>
								<div class="col-xs-3 col-sm-3 col-md-3">
			    					<div class="form-group">
			                <input type="text" name="age" id="age" class="form-control input-sm" placeholder="Age">
			    					</div>
			    				</div>
								
							</div>
							<div class = "col-sm-3">
							<h5>Birthdate</h5>
							</div>
							<table>
							<div class = "col-sm-3">
							Month <select class="month" name=month value=''></option>

							<div id="statusbox">

							 <option> ------------- </option>
							<option value='01'>Jan</option>

						 <option value='02'>Feb</option>

						 <option value='03'>Mar</option>

						 <option value='04'>Apr</option>

						 <option value='05'>May</option>

						 <option value='06'>Jun</option>

						 <option value='07'>Jul</option>

						 <option value='08'>Aug</option>

						 <option value='09'>Sept</option>

						 <option value='10'>Oct</option>

						 <option value='11'>Nov</option>

						 <option value='12'>Dec</option>

							</div>
							</select>
							</div>
							</table>
							<table>
							<div class = "col-sm-2">
							Date <select class="date" name=dt value=''></option>

							<div id="statusbox">

							 <option> ------ </option>
							<option value='01'>01</option>

						 <option value='02'>02</option>

						 <option value='03'>03</option>

						 <option value='04'>04</option>

						 <option value='05'>05</option>

						 <option value='06'>06</option>

						 <option value='07'>07</option>

						 <option value='08'>08</option>

						 <option value='09'>09</option>

						 <option value='10'>10</option>

						 <option value='11'>11</option>

						 <option value='12'>12</option>

						 <option value='13'>13</option>

						 <option value='14'>14</option>

						 <option value='15'>15</option>

						 <option value='16'>16</option>

						 <option value='17'>17</option>

						 <option value='18'>18</option>

						 <option value='19'>19</option>

						 <option value='20'>20</option>

						 <option value='21'>21</option>

						 <option value='22'>22</option>

						 <option value='23'>23</option>

						 <option value='24'>24</option>

						 <option value='25'>25</option>

						 <option value='26'>26</option>

						 <option value='27'>27</option>

						 <option value='28'>28</option>

						 <option value='29'>29</option>

						 <option value='30'>30</option>

						 <option value='31'>31</option>

							</div>
							</select>
							</div>
							</table>
							<table>
							<div class = "col-sm-1">
							Year <select class="year" name=yr value=''></option>

							<div id="statusbox">

							 <option> ------------- </option>
							<option value='1990'>1990</option>

						 <option value='1991'>1991</option>

						 <option value='1992'>1992</option>

						 <option value='1993'>1993</option>

						 <option value='1994'>1994</option>

						 <option value='1995'>1995</option>

						 <option value='1996'>1996</option>

						 <option value='1997'>1997</option>

						 <option value='1998'>1998</option>

						 <option value='1999'>1999</option>

						 <option value='2000'>2000</option>

						 <option value='2001'>2001</option>

						 <option value='2002'>2002</option>

						 <option value='2003'>2003</option>

						 <option value='2004'>2004</option>

						 <option value='2005'>2005</option>

						 <option value='2006'>2006</option>

						 <option value='2007'>2007</option>

						 <option value='2008'>2008</option>

						 <option value='2009'>2009</option>

						 <option value='2010'>2010</option>

						 <option value='2011'>2011</option>

						 <option value='2012'>2012</option>

						 <option value='2013'>2013</option>

						 <option value='2014'>2014</option>

						 <option value='2015'>2015</option>

						 <option value='2017'>2017</option>

						 <option value='2018'>2018</option>

						 <option value='2019'>2019</option>

						 <option value='2020'>2020</option>

							</div>
							</select>
							</div>
							</table>
							<br><br><br>
							<div class="form-group">
			    				<input type="text" name="address" id="address" class="form-control input-sm" placeholder="Address">
			    			</div>
								<div class="form-group">
			    				<input type="text" name="contactnumber" id="contactnumber" class="form-control input-sm" placeholder="ContactNumber">
			    			</div>	
			    
			    			<input type="submit" value="Register" class="btn btn-info btn-block">
			    		
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

           $query = "SELECT * FROM employee"; //You don't need a ; like you do in SQL

		   $result = $con->query($query);

     echo"<center>";
     
	 echo'<table border="1" width="100%"><th>AccountID</th><th>Firstname</th><th>Middlename</th><th>Lastname</th><th>Age</th><th>Birthday</th><th>Gender</th>><th>Address</th><th>ContactNumber</th>';

             while($row=$result->fetch_assoc())
{
     echo'<tr><td>'.$row['AccountID'].'</td><td>'.$row['FirstName'].'</td><td>'.$row['MiddleName'].'</td><td>'.$row['LastName'].'</td><td>'.$row['Age'].'</td><td>'.$row['Birthday'].'</td><td>'.$row['Gender'].'</td><td>'.$row['Address'].'</td><td>'.$row['ContactNumber'].'</td></tr>';

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