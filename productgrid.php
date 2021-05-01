 <?php
 include('header1.php');
  
 ?><div class=" container-fluid">
<div class="row">
<div class="col-md-2">
<?php
require('menu.php');
?>
</div>
 <div class="col-md-10">

          <!-- start: Content -->
            <div id="content">
              <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">My Product</h3>
                        <p class="animated fadeInDown">
                          dashboard <span class="fa-angle-right fa"></span> My Product
                        </p>
                    </div>
                  </div>
              </div>
              <div class="col-md-12">
                  <div class="row">
               <?php
$query="select * from s_product ";
 
		if($conn->query($query))
{
$result=$conn->query($query);
if($result->num_rows > 0)
{
	 
	while($row=$result->fetch_assoc())
	{ 
              echo'
                    <div class="col-sm-6 col-md-3 product-grid">
                      <div class="thumbnail">
               <div class="product-location">
                          <span class="fa-map-marker fa"></span> Banda, India
                          </div>
                        <div class="product-price product-price-bottom">
                          <h4>';
						  echo($row['p_price']);
						  echo'&nbsp;Rs</h4>
                        </div>
                        <img alt="..." src="';
						echo($row['p_image']); 
						 echo' ">
                        <div class="caption">
                          <small>Category</small>
                          <small class="pull-right">
                            <span class="rate fa-star fa"></span>
                            <span class="rate fa-star fa"></span>
                            <span class="rate fa-star fa"></span>
                            <span class="rate fa-star fa"></span>
                            <span class="rate fa-star-half fa"></span>
                          </small>
                          <h4>';
						  echo($row['p_name']);
						  echo'</h4><p>';
                         echo($row['p_description']); 
						 echo'</p>
                          <p><a href="#" class="btn btn-primary" role="button">Send Message</a></p>
                        </div>
                      </div>
                    </div>
					 ';
					}

}
		}
?>
                     </div>
                     </div></div>


           
      
<!-- start: Javascript -->
<script src="admin/asset/js/jquery.min.js"></script>
<script src="admin/asset/js/jquery.ui.min.js"></script>
<script src="admin/asset/js/bootstrap.min.js"></script>


<!-- plugins -->
<script src="miminium-master/asset/js/plugins/holder.min.js"></script>
<script src="miminium-master/asset/js/plugins/moment.min.js"></script>
<script src="miminium-master/asset/js/plugins/jquery.nicescroll.js"></script>


<!-- custom -->
<script src="miminium-master/asset/js/main.js"></script>
<script type="text/javascript">
  $(document).ready(function(){

  });
</script>
<!-- end: Javascript -->
</body>
</html>