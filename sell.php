 <?php
require_once('connection.php');
require('header.php');
?>
<body>
<div class=" container-fluid">
<div class="row">
<div class="col-md-2">
<?php
require('menu.php');
?>
 <?php
if(isset($_REQUEST['save']))
{		
	if(empty($_REQUEST['notice_title']))
	{
		echo'<h4 class="text-center text-white">Please Fill Notice Title!</h4>';
	}
	else
			if(empty($_REQUEST['notice_type']))
	{
		echo'<h4 class="text-center text-white">Please Select Notice Type!</h4>';
	}
	else
if(empty($_REQUEST['notice_description']))
	{
		echo'<h4 class="text-center text-white">Please Type Notice !</h4>';
	}
	else
	{
	
	$notice_title=$_REQUEST['notice_title'];
	 $notice_type=$_REQUEST['notice_type'];
	$notice_description=$_REQUEST['notice_description'];
	$st_type=$_REQUEST['st_type'];
	$st1_type=$_REQUEST['st1_type'];
	$p_image=$_REQUEST['p_image'];
	
		$query="insert into s_product(p_id,p_name,p_type,p_description,p_price,p_qty,p_image)Values(NULL,'".$notice_title."','".$notice_type."','".$notice_description."','".$st_type."','".$st1_type."','".$p_image."') ";
		if($conn->query($query))
		{
			echo'<h4 style="text-align:center;"><font color="green">&quot;Product Successfully Added.&quot;</font></h4>';
		}
		else
		{
			echo'<h4 style="text-align:center;"><font color="#FF3300">Some Error Occured!</font></h4>';
		}
}
}
?>
</div>
 <div class="col-md-10">
 <div style="height:20px"></div>
 <form action="#" method="POST">
		<h2>New product</h2>
		<p class="hint-text">Product add to sell in portal.</p>
        <div class="form-group">
				<input type="text" class="form-control" name="notice_title" placeholder="Product Name *" required>
        </div>
        <div class="form-group">
        	<select name="notice_type">
            <option>Product Type</option>
           
            <option>Rabi Crops</option>
            <option>Cash Crops</option>
            <option>Zayed Crop</option>
            </select>
        </div>
         <div class="form-group">
        	<select name="st_type">
            <option>Product Price</option>
            <option> 2000 Rs</option>
            <option>3000 Rs</option>
            <option>5000 Rs</option>
            <option>1000 Rs</option>
            </select>
        </div>
         <div class="form-group">
        	<select name="st1_type">
            <option>Product Quantity (Quintal)</option>
            <option>1 </option>
            <option>2</option>
            <option>5</option>
            <option>10</option>
            </select>
        </div>
        <div class="form-group">
        	 
    Select image to upload:
    <input type="file" name="p_image" >
     
 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center">
                                    <button type="submit" name="save" value="SEND" id="submit" class="btn btn-light btn-radius btn-brd grd1 btn-block" style="padding:20px">Publish</button><br>
                                </div>     </form>  
                               
</div>
 </div></div>
 </body>
 </html>
 
<?php
require('footer.php');
?>