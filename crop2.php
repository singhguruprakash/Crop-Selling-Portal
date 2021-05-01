<?php
include('header1.php');

require_once('connection.php');

?>




<body>
<div class=" container-fluid">
<div class="row">
<div class="col-md-2">
<?php
require('menu.php');
?>
</div>
 <div class="col-md-10">


<?php
 
	
	 
$query="select * from s_product ";
 
		if($conn->query($query))
		{
		 echo'<h1 class="text-center text-info font-weight-bolder" style="margin-top:30px">  Your Products List</h1>
 <table class="table table-bordered">
 
<thead class="bg-warning"><tr >
		 
    	<td> Product id</td>
        <td> Product name</td>
         <td> Product type</td>
        <td>Product Description</td>
        <td>Product Price</td>
		<td>Product Quantity</td>
		<td>Customer Name</td>
		<td>Customer Contact</td>
		        
        
      </tr></thead>';
       
 
 
$result=$conn->query($query);
if($result->num_rows > 0)
{
	 
	while($row=$result->fetch_assoc())
	{
	 	
		 
		echo'<td>';
		echo($row['p_id']);
		echo'</td> ';
		echo'<td>';
		echo($row['p_name']);
		echo'</td> ';
		echo'<td>';
		echo($row['p_type']);
		echo'</td> ';
		echo'<td>';
		echo($row['p_description']);
		echo'</td> ';
		 
		echo'<td>';
		echo($row['p_price']);
		echo'</td >';
		echo'<td>';
		echo($row['p_qty']);
		echo'</td >';
		echo'<td>';
		echo('Rahul Gupta');
		echo'</td >';
		 echo'<td>';
		echo('8960255609');
		echo'</td >';
		 
		 echo'</tr></form>';
				 		
	}

}
		}
?>

 
 

 
 </div>
 </div>
 </div>
<div style="height:40px">

</div>
 
 </body>
 </html>

