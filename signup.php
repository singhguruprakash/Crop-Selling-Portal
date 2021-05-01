<?php
require('header.php');
include('connection.php');
?>
	

<?php
// Timezone is Asia/Calcutta
date_default_timezone_set('Asia/Calcutta');

// 24-hour format of an hour without leading zeros (0 through 23)
$Hour = date('H');

if ( $Hour >= 4 && $Hour <= 12 ) {
    echo "<h1 style='text-align:center;padding-top:100px;' class='text-success	'>Good Morning, Buddy</h1>";
} else if ( $Hour > 12 && $Hour <= 16 ) {
    echo "<h1 style='text-align:center;padding-top:100px;' class='text-success	'>Good Afternoon, Buddy</h1>";
} else if ( $Hour > 16 || $Hour <= 20 ) {
    echo "<h1 style='text-align:center;padding-top:100px;' class='text-success	'>Good Evening, Buddy</h1>";
}
else if ( $Hour > 20 || $Hour < 4 ) {
    echo "Good Night";
}
?>



<?php
if(isset($_POST['save']))
{
$name=$_POST['name'];
$address=$_POST['address'];
$location=$_POST['location'];
$mobile=$_POST['mobile'];
$category=$_POST['category'];
$password=sha1($_POST['password']);

$query= "insert into farmer_detail(f_id,f_name,f_address,f_location,f_mobile,f_password,type) VALUES(NULL,'".$name."','".$address."','".$location."','".$mobile."','".$password."','".$category."')";
if($conn->query($query))
{
	//echo $query;
	echo('<div class="container bg-success" style="text-align:center;"><h1>Successfully Added.</h1></div>');


}else
{
	$query="select * from farmer_detail where f_mobile='".$mobile."'";
	$result=$conn->query($query);
	if($result->num_rows>0)
	{
		echo('<div class="container bg-danger" style="text-align:center;"><h1>Farmer already registered in our Portal.</h1></div>');
	}
}
}
?>   

<body class="top-header">
     


   
    
    
<?php
require('signupform.php');
require('footer.php');
?>