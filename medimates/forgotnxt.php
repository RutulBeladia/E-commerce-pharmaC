<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
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
			                    <label for="name"><i class="zmdi zmdi-account material-icons-name icon-size"></i>&nbsp;&nbsp;&nbsp;<span class="lb-size">Enter Your Name</span></label>
			                    <input type="text" class="form-control" name="name" id="name" placeholder="Your Name"/>
			                </div>
			                <div class="form-group">
			                    <label for="pass"><i class="zmdi zmdi-lock icon-size"></i>&nbsp;&nbsp;&nbsp;<span class="lb-size">Enter Your Password</span></label>
			                    <input type="password"class="form-control" name="pass" id="pass" placeholder="Password"/>
			                </div>
			                <div class="form-group">
			                    <label for="re-pass"><i class="zmdi zmdi-lock-outline icon-size"></i>&nbsp;&nbsp;&nbsp;<span class="lb-size">Confirm Password</span></label>
			                    <input type="password" class="form-control"name="re_pass" id="re_pass" placeholder="Re-Enter your password"/>
			                </div>
			               
			                <div class="form-group form-button">
			                    <a href="login.php"><input type="submit" name="signup" id="signup" class="btn btn-info" value="OK"/></a>
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