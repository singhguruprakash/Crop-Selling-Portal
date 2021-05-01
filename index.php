<?php
require('header.php');
include('connection.php');	
?>
	
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <div class="item active">
      <img src="image/i1.jpg" alt="Los Angeles" width="100%" height="200px">
    </div>

    <div class="item">
      <img src="image/i2.jpg" alt="Chicago" width="100%"  height="200px">
    </div>

    <div class="item">
      <img src="image/i3.jpg" alt="New York" width="100%"  height="200px">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<div class="col-md-12 " style="background-color:#9FF">

          <!-- start: Content -->
            
              <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-6">
                        <h3 class="animated fadeInLeft">Product</h3>
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
                          <p><a href="admin.php" class="btn btn-primary" role="button">Send Message</a></p>
                        </div>
                      </div>
                    </div>
					 ';
					}

}
		}
?>
     </div></div></div>
     <div style="height:70px"></div>
<?php
require('footer.php');	
?>
