<?php
session_start();
require_once('connection.php');

?>
<?php
 
 
 
 require_once('connection.php');
 if(isset($_REQUEST['login']))
 {
	  	 
	$email = $_POST['email'];
	$password = $_POST['password'];
	$query = "select * from admin where admin_email='".$email."' and admin_password='".$password."'";
	$result=$conn->query($query);
	//echo $query;
	if( $result->num_rows > 0)
	{
		 
	while($rows=$result->fetch_assoc())
		{
		echo'<a href="#"><p class="text-white text-decoration-none" style="margin-top:0px; font-size:13px"><p style="font-size:60px; text-align:center; background-color:lightgreen">Welcome,';	 
		echo( $rows['admin_name']);
		
		echo"</p></a>";	
		}
		 
	}
	else
	{
		 
		header('Location:admin.php');
	 
	}}
	
	
	require('header1.php');
 
?>  
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Register form</title>
</head>

<body>
<div class=" container-fluid">
<div class="row">
<div class="col-md-2">
<?php
require('menu2.php');
?>
</div>
 <div class="col-md-10">
 <img src="image/profile.jpg" alt="image" class="img-responsive img-rounded" style="margin:10px;">
</div>
 </div></div>


 
 
 
 
  
 </body>
 </html>
 
<?php
require('footer.php');
?>