<!doctype html>
<html lang="en">

<?php

session_start();
include('connection.php');
?>


<body class="top-header" bgcolor="black">
    <?php
 
 //echo('gautam');
 if(isset($_POST['login']))
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
		
		header('Location:admin/dashboard-v2.php');
		
		}
 	}
	else
	{	 
		echo("<h1 style='text-align:center;padding-top:100px;' class='text-success	'>Some error occured");
	}
	}
?>   
<?php
require('header.php');
require('ulogin.php');
?>

</div> 



   
    
   
<?php
require('footer.php');
?>