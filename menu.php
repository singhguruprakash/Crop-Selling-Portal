<div style="height:50px"></div>
<?php
include('connection.php');
 
$query="select * from sidebar";
$result=$conn->query($query);
		if($conn->query($query))
		//echo $query;
		{
			
			while($rows=$result->fetch_assoc())
		{
			
		
		echo'<table class="table">';
		echo '<thead class="bg-primary"><tr ><td><a style="color:white;" href=';
		 echo $rows['link'] ;
		 echo'>';
		echo $rows['sidebar_name'];
		
		
		echo"</a></td></tr></thead>";
							
		}
		}
		 ?>
 
<thead class="bg-primary"><tr ><td><a href="admin.php" style="color:white;" >Log out</a></td></tr></thead></table>
 </table>