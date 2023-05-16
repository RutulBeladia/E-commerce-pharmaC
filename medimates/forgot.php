<!DOCTYPE html>
<html>
<head>
	<title>Forgot</title>
	<link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style type="text/css">
    	.icon-size
    	{
    		font-size: 25px;
    	}
    	body{
    		background-size: 100%;
    		background-image: url(images/bgform.jpg);
    		background-attachment: fixed;
    	}
    	.lb-size
    	{
    		font-size: 15px;
    	}
    	.signup-content
    	{
    		width: 50%;
    		float: left;
    	}
    	.bgcolor-frm
    	{
    		padding-top: 50px;
    	}
      </style>
</head>
<body>
<div class="panel panel-group">
<div class="container">	
	<div class="row">
		<div class="col-sm-3"></div>
			<div class="container col-sm-9 bgcolor-frm">
			    <div class="signup-content">
			        <div class="signup-form">
			            <h2 class="form-title">Sign up</h2>
			            <form method="POST" class="register-form" id="register-form">
			                <div class="form-group">
			                    <label for="email"><i class="zmdi zmdi-email icon-size"></i>&nbsp;&nbsp;&nbsp;<span class="lb-size">Enter Your Email</span></label>
			                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"/>
			                </div>
			                <div class="form-group form-button">
			                    <input type="submit" name="forgot" id="forgot" class="btn btn-info" value="NEXT"/>	
			                </div>
			            </form>
			        </div>
			    </div>
			</div>
	</div>
</div>	
</div>
</div>
</body>
</html>