<?php
include('database/db_connect.php');
//error_reporting(0);
?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>ecomm Sign up Page</title>
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="./css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLE CSS -->
    <link href="./css/font-awesome.min.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="./css/style.css" rel="stylesheet" />    
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<script language="JavaScript" type="text/javascript">
function validate()
  {
    if (document.register.code.value  == '')
    {
      alert("Error: Give International Code for the register");
	   document.register.code.focus();
      return false;
    }
	
	if (document.register.name.value  == '')
    {
      alert("Error: Give name for the register");
	  document.register.name.focus();
      return false;
    }
	if(document.register.name.value >30)
	{
		alert("register name should not exeed 30 characters");
		document.register.name.focus();
		return false;
	}
	
    return true;
  }
</SCRIPT>
<?php
if(isset($_POST['add']))
{
echo "Hai";	
$name = $_REQUEST["name"];
$email = $_REQUEST["email"];
$mobile = $_REQUEST["mobile"];
$password = MD5($_REQUEST["password"]);
echo "Name : "; echo $name; echo "<br>";
echo "Email : "; echo $email; echo "<br>";
echo "Mobile : "; echo $mobile; echo "<br>";
echo "Passowrd : "; echo $password; echo "<br>";
if($_REQUEST["add"] == "Register Me")
{
		
	$sql = "SELECT email from register where email = $email";
	$result = mysqli_query($conn,$sql);
	  if(mysqli_num_rows($result) > 0){
		  		printf ("The email already registered with us");
			 }
			  else
			 {
				 echo  "Here we are inserting the record";
				$sql ="INSERT INTO register values('','$name','$email','$mobile','$password')";
			 
			 if(mysqli_query($conn,$sql))
			 	{
?>
   <script>
    window.location = 'index.php?link=login';
</script>
<?php                }
			 else
			 	{
			 echo"error:".$sql."<br>".mysqli_error($conn);
			 	}
			 }
} 
}

?>

<body>
 <form action="<?php $PHP_SELF ?>" method="POST" name='register' onsubmit="return validate();">
    <div class="container">
        
         <div class="row  pad-top">
               
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                        <strong>  <h4> Sign Up / Registration </h4></strong>  
                            </div>
                            <div class="panel-body">
                                <form role="form">
<br/>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-circle-o-notch"  ></i></span>
                                            <input type="text" name="name" class="form-control" placeholder="Your Name" />
                                        </div>
                                         <div class="form-group input-group">
                                            <span class="input-group-addon">@</span>
                                            <input type="text" name="email" class="form-control" placeholder="Your Email" />
                                        </div>
										
										    <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-phone"  ></i></span>
                                            <input type="text" name="mobile" class="form-control" placeholder="Mobile No" />
                                        </div>
										
										
                                      <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" name="password" class="form-control" placeholder="Enter Password" />
                                        </div>
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                            <input type="password" name="confirm_password" class="form-control" placeholder="Retype Password" />
                                        </div>
                                     
<!--                                     <a href="#" class="btn btn-success ">Register Me</a> -->
   <input name = "add" type = "submit" value = "Register Me"  class="btn btn-success">
                                    <hr />
                                    Already Registered ?  <a href="index.php?link=login" >Login here</a>
                                    </form>
                            </div>
                           
                        </div>
                    </div>
                
                
        </div>
    </div>


    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="./js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="./js/bootstrap.js"></script>
</form>   
</body>
</html>
