<?php
require_once('connection.php');
include('head1.php');
?>
<?php
 
 
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
 
<body>
<div class=" container-fluid">
<div class="row">
<div class="col-md-2">
<?php
if('Farmer'){
require('menu.php');
}
else{
	require('menu2.php');
}
?>
</div>
 <div class="col-md-10">
   <div id="content">
              <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Dashboard</h3>
                        <p class="animated fadeInDown">
                          Portal <span class="fa-angle-right fa"></span> dashboard
                        </p>
                    </div>
                  </div>
              </div>
              
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="panel">
                <div class="panel-body">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class='col-md-12 padding-0'>
                      <div>
                        <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                          <!-- Bottom Carousel Indicators -->
                          <ol class="carousel-indicators">
                            <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#quote-carousel" data-slide-to="1"></li>
                            <li data-target="#quote-carousel" data-slide-to="2"></li>
                          </ol>

                          <!-- Carousel Slides / Quotes -->
                          <div class="carousel-inner">

                            <!-- Quote 1 -->
                            <div class="item active">
                              <blockquote>
                                <div class="col-md-12">
                                  <div class="col-sm-3 text-center">
                                    <img class="img-circle" src="asset/img/avatar.jpg" style="width: 100px;height:100px;">
                                  </div>
                                  <div class="col-sm-9">
                                    <p>भारत संरचनात्मक दृष्टि से गांवों का देश है, और सभी ग्रामीण समुदायों में अधिक मात्रा में कृषि कार्य किया जाता है इसी लिए भारत को भारत कृषि प्रधान देश की संज्ञा भी मिली हुई है।</p>
                                    <small>Raman Singh</small>
                                  </div>
                                </div>
                              </blockquote>
                            </div>
                            <!-- Quote 2 -->
                            <div class="item">
                              <blockquote>
                                <div class="col-md-12">
                                  <div class="col-sm-3 text-center">
                                    <img class="img-circle" src="asset/img/avatar.jpg" style="width: 100px;height:100px;">
                                  </div>
                                  <div class="col-sm-9">
                                    <p>भारतीय किसान गरीब है। उनकी गरीबी पूरी दुनिया में प्रसिद्ध है। किसान को दो वक्त का खाना भी नसीब नहीं हो पाता। उन्हें मोटे कपड़े का एक टुकड़ा नसीब नही हो पाता है। वह अपने बच्चों को शिक्षा भी नहीं दे पाते। वह अपने बेटे और बेटियों का ठीक पोशाक तक खरीद कर नहीं दे पाते। </p>
                                    <small>Hasan</small>
                                  </div>
                                </div>
                              </blockquote>
                            </div>
                            <!-- Quote 3 -->
                            <div class="item">
                              <blockquote>
                                <div class="row">
                                  <div class="col-sm-3 text-center">
                                    <img class="img-circle" src="asset/img/avatar.jpg" style="width: 100px;height:100px;">
                                  </div>
                                  <div class="col-sm-9">
                                    <p>पुराने किसानों की अधिकांश अनपढ़ आदि ज्यादा पढी-लिखी नहीं थी लेकिन नई पीढ़ी के अधिकतर किसान शिक्षित हैं। उनके शिक्षित होने के नाते उन्हें बहुत मदद मिलती है। वे प्रयोगशाला में अपने खेतों की मिट्टी का परीक्षण करवा लेते है। इस प्रकार, वे समझ जाते की उनके क्षेत्रों में सबसे ज्यादा फसल किसकी होगी। भारतीय किसान सरल संभव तरीके से सामाजिक समारोह मनाता है। </p>
                                    <small>From Wikipedia</small>
                                  </div>
                                </div>
                              </blockquote>
                            </div>
                          </div>

                          <!-- Carousel Buttons Next/Prev -->
                          <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
                          <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
                        </div>                          
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> 
      <button id="mimin-mobile-menu-opener" class="animated rubberBand btn btn-circle btn-danger">
        <span class="fa fa-bars"></span>
      </button>
       <!-- end: Mobile -->

<!-- start: Javascript -->
<script src="asset/js/jquery.min.js"></script>
<script src="../admin/asset/js/jquery.ui.min.js"></script>
<script src="asset/js/bootstrap.min.js"></script>


<!-- plugins -->
<script src="../admin/asset/js/plugins/holder.min.js"></script>
<script src="../admin/asset/js/plugins/moment.min.js"></script>
<script src="../admin/asset/js/plugins/jquery.nicescroll.js"></script>


<!-- custom -->
<script src="../admin/asset/js/main.js"></script>
<script type="text/javascript">
  $(document).ready(function(){

  });
</script>
<!-- end: Javascript -->

</div>
 </div></div>


 
 
 
 
  
 </body>
 </html>
 
<?php
require('footer.php');
?>