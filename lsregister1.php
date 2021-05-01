<?php
require_once('connection.php');

?>
<?php
 
 require_once('connection.php');
 if(isset($_REQUEST['login']))
 {
	  	 
	$fmo = $_REQUEST['fmo'];
	$fpass = sha1($_REQUEST['fpass']);
	 
	$query = "select * from farmer_detail where f_mobile='".$fmo."' and f_password='".$fpass."'";
	$result=$conn->query($query);
	 //echo $query;
	if( $result->num_rows > 0)
	{
		 
	while($rows=$result->fetch_assoc())
		{
		echo'<a href="#"><p class="text-white text-decoration-none" style="margin-top:0px; font-size:13px"><p style="font-size:60px; text-align:center; background-color:lightgreen">Welcome,';	 
		echo( $rows['f_name']);
		echo("&nbsp; ");
		echo( $rows['type']);
		echo"</p></a></td>";	
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
require('menu1.php');
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