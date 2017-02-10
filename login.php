
<?php

$username = "root";
$password = "";
$hostname = "localhost";

$con=mysqli_connect($hostname, $username, $password);

// Check connection

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
  // ...some PHP code for database "my_db"...

// Change database to "test"
mysqli_select_db($con,"pointofsale");

// ...some PHP code for database "test"...

?>