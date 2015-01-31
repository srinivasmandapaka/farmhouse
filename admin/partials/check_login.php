<?php
include('database/db_connect.php');
$email=$_POST["email"];
$password=MD5($__POST["password"]);


	$sql = "SELECT * from register";
	$result = mysqli_query($conn,$sql);
	  if(mysql_num_rows($result)>0)
	  {
		while($row=mysqli_fetch_assoc($result))
		{
		echo $row['email'];	
		}
	  }
	  else
	  {
		  echo "No emaill exists";
	  }
	  
	  

?>
