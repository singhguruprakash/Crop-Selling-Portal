<?php
 require('header.php');
 require_once('connection.php');
?>
 
<body>
 
  <div  class="bg-dark" style=" height:70px; width:auto">
    
 </div>

<div class="container-fluid bg-dark">
<div class="row">
<div class="col-md-4">
</div>
<div class="col-md-4" style="background:#CCF">
<form class="form-group p-3" method="post" action="lsregister.php">
 
 <h3  class="text-center font-weight-bold text-warning " style="padding-top:30px;"> <b>Log In</b></h3> <br><br>
 <input type="bigint" name="fmo" class="form-control" placeholder="Mobile Number" aria-label="mobilenumber"><br> 
 <input type="password" name="fpass" class="form-control" placeholder="Password" aria-label="password"> <br>
 <div style="height:5px; width:auto">
 <div style="float:left">
  <label class=" text-decoration-none"> <a href="forget.php"><p style="font-size:15px;margin:0px;" class="text-primary">Forgot Password?</p></a></label>
  <label class=" text-decoration-none"> <a href="signup.php"><p style="font-size:15px;margin:0px;" class="text-primary">New User?Sign Up</p></a></label>
   
  </div>   
    
 
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center">
                                    <button type="submit" name="login" value="SEND" id="submit" class="btn btn-light btn-radius btn-brd grd1 btn-block" style="padding:5px">Submit</button><br>
                                </div>                               
</form>
</div>
<div class="col-md-4">
</div>
</div>
</div>
<div  class="bg-dark" style=" height:70px; width:auto">
    
 </div>
</body>
 </html>
 
 
<?php
require('footer.php');?>