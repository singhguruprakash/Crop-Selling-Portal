<style type="text/css">
	body{
		color: #fff;
		background: black;
		font-family: 'Roboto', sans-serif;
	}
    .form-control{
		height: 40px;
		box-shadow: none;
		color: #969fa4;
	}
	.form-control:focus{
		border-color: #5cb85c;
	}
    .form-control, .btn{
        border-radius: 3px;
    }
	.signup-form{
		width: 600px;
		margin: 0 auto;
		padding-top: 300px ;
	}
	.signup-form h2{
		color: #636363;
        margin: 0 0 15px;
		position: relative;
		text-align: center;
    }
	.signup-form h2:before, .signup-form h2:after{
		content: "";
		height: 2px;
		width: 30%;
		background: #d4d4d4;
		position: absolute;
		top: 50%;
		z-index: 2;
	}
	.signup-form h2:before{
		left: 0;
	}
	.signup-form h2:after{
		right: 0;
	}
    .signup-form .hint-text{
		color: #999;
		margin-bottom: 30px;
		text-align: center;
	}
    .signup-form form{
		color: #999;
		border-radius: 3px;
    	margin-bottom: 15px;
        background: #f2f3f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
	.signup-form .form-group{
		margin-bottom: 20px;
	}
	.signup-form input[type="checkbox"]{
		margin-top: 3px;
	}
	.signup-form .btn{
        font-size: 16px;
        font-weight: bold;
		min-width: 140px;
        outline: none !important;
    }
	.signup-form .row div:first-child{
		padding-right: 10px;
	}
	.signup-form .row div:last-child{
		padding-left: 10px;
	}
    .signup-form a{
		color: #fff;
		text-decoration: underline;
	}
    .signup-form a:hover{
		text-decoration: none;
	}
	.signup-form form a{
		color: #5cb85c;
		text-decoration: none;
	}
	.signup-form form a:hover{
		text-decoration: underline;
	}
</style>

<div   style=" height:200px; width:auto">
    
 </div>

<div class="container-fluid">
<div class="row">
<div class="col-md-4">
</div>
<div class="col-md-4" style="background:#f2f3f7">
<form  method="post" action="adminlogin.php" class="form-group p-3">
 
 <h3  class="text-center font-weight-bold text-warning " style="padding-top:30px;"> <b>Log In(Admin) </b></h3> <br><br>
 <input type="email" name="email" class="form-control" placeholder="Email ID" aria-label="emailid"><br> 
 <input type="password" name="password" class="form-control" placeholder="Password" aria-label="password"> <br>
 <div style="height:5px; width:auto">
 <div style="float:left">
  <label class=" text-decoration-none"> <a href="forget.php"><p style="font-size:15px;margin:0px;" class="text-primary">Forgot Password?</p></a></label></div>   
    
 
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center">
                                    <button type="submit" name="login" value="SEND" id="submit" class="btn btn-success btn-radius btn-brd grd1 btn-block" style="padding:5px">Submit</button><br>
                                </div>                               
</form>
</div>
<div class="col-md-4">
</div>
</div>
</div>
<div   style=" height:70px; width:auto">
    
 </div>
