<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    
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
			            <form method="POST" class="register-form" id="register-form" action="preg.php">
			                <div class="form-group">
			                    <label for="name"><i class="zmdi zmdi-account material-icons-name icon-size"></i>&nbsp;&nbsp;&nbsp;<span class="lb-size">Enter Your Name</span></label>
			                    <input type="text" class="form-control" name="name" id="name" placeholder="Your Name"/>
			                    <span id="nm" class="text-danger form-weight-bold"></span>
			                </div>
			                 <div class="form-group">
			                    <label for="name"><i class="zmdi zmdi-phone material-icons-name icon-size"></i>&nbsp;&nbsp;&nbsp;<span class="lb-size">Enter Your Phone No.</span></label>
			               		<input type="text" class="form-control" name="phno" id="phno" placeholder="Your phone number"/>
			              		 <span id="ph" class="text-danger form-weight-bold"></span>
			                </div>
			                <div class="form-group">
			                    <label for="email"><i class="zmdi zmdi-email icon-size"></i>&nbsp;&nbsp;&nbsp;<span class="lb-size">Enter Your Email</span></label>
			                    <input type="text" class="form-control" name="email" id="email" placeholder="Your Email"/>
			                    <span id="em" class="text-danger form-weight-bold"></span>
			                </div>
			                <div class="form-group">
			                    <label for="pass"><i class="zmdi zmdi-lock icon-size"></i>&nbsp;&nbsp;&nbsp;<span class="lb-size">Enter Your Password</span></label>
			                    <input type="password"class="form-control" name="pass" id="pass" placeholder="Password"/>
			                    <span id="pwd" class="text-danger form-weight-bold"></span>
			                </div>
			                <div class="form-group">
			                    <label for="re-pass"><i class="zmdi zmdi-lock-outline icon-size"></i>&nbsp;&nbsp;&nbsp;<span class="lb-size">Confirm Password</span></label>
			                    <input type="password" class="form-control"name="re_pass" id="re_pass" placeholder="Re-Enter your password"/>
			                    <span id="cpwd" class="text-danger form-weight-bold"></span>
			                </div>
			                <div class="form-group">
			                    <label for="re-pass"><i class="fa fa-list-ul icon-size"></i>&nbsp;&nbsp;&nbsp;<span class="lb-size">Security Question</span></label>
			                    <select class="form-control"  name="sq" id="sq">
			                    	<option class="form-group"></option>
			                    	<option class="form-group">Who is your Child Friend?</option>
			                    	<option class="form-group">Which is your first Mobile?</option>
			                    	<option class="form-group">who is your favorite Actor?</option>
			                    </select>
			                </div>
			                <div class="form-group">
			                    <label for="re-pass"><i class="fa fa-edit icon-size"></i>&nbsp;&nbsp;&nbsp;<span class="lb-size">Answer</span></label>
			                   <input type="text" class="form-control zmdi zmdi-edit" id="answer" name="answer" placeholder="your answer">
			                   <span id="ans" class="text-danger form-weight-bold"></span>
			                </div>
			                <div class="form-group">
			                    <input type="checkbox"class="checkbox-control" name="agree-term" id="agree-term" class="agree-term" />
			                    <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
			                     <p><a href="login.php">Already Account?</a></p>
			                </div>
			                <div class="form-group form-button">
			                    <input type="submit" name="signup" id="signup" class="btn btn-info" onclick="return validate()" value="Register"/>
			                </div>
			            </form>
			        </div>
			    </div>
			</div>
	</div>
</div>	
</div>
</div>
<script type="text/javascript">
	function validate()
	{
		var name=document.getElementById('name').value;
		var phone=document.getElementById('phno').value;
		var email=document.getElementById('email').value;
		var pwd=document.getElementById('pass').value;
		var cpwd=document.getElementById('re_pass').value;
		var sq=document.getElementById('sq').value;
		var ans=document.getElementById('answer').value;
		var chk=document.getElementById('agree-term').value;

		/*name*/
		if(name=="")
		{
			document.getElementById('nm').innerHTML="*please fill  the field * ";
			return	false;
		}
		else if(name.length <=1)
		{
			document.getElementById('nm').innerHTML="* Enter valid name * ";
			return	false;
		}
		else if(!isNaN(name))
		{
			document.getElementById('nm').innerHTML="* number not allowed * ";
			return	false;
		}

		/*phone*/
		if(phone=="")
		{
			document.getElementById('ph').innerHTML="*please fill  the field * ";
			return	false;
		}
		else if(isNaN(phone))
		{
			document.getElementById('ph').innerHTML="* You must have to enter only Numeric * ";
			return	false;
		}
		else if(phone.length !=10)
		{
			document.getElementById('ph').innerHTML="*Enter 10 digits only*";
			return	false;
		}

		/*email*/
		if(email=="")
		{
			document.getElementById('em').innerHTML="*please fill  the field * ";
			return	false;
		}
		else if(email.indexOf('@') <=0)
		{
			document.getElementById('em').innerHTML="*  @ Invalid Email * ";
			return	false;
		}
		else if(email.charAt(email.length-4) != '.')
		{
			document.getElementById('em').innerHTML="* Invalid Email * ";
			return	false;
		}
		

		/*password*/
		if(pwd=="")
		{
			document.getElementById('pwd').innerHTML="*please fill  the field * ";
			return	false;
		}
		else if((pwd.length <=5) || (pwd.length >10))
		{
			document.getElementById('pwd').innerHTML="*password must be 6 character long* ";
			return	false;
		}

		/*re-password*/
		if(cpwd=="")
		{
			document.getElementById('cpwd').innerHTML="*please fill  the field * ";
			return	false;
		}
		if(pwd!=cpwd)
		{
			document.getElementById('cpwd').innerHTML="* Password Not Match* ";
			return	false;
		}

		/*security Question*/
		if(sq=="")
		{
			document.getElementById('sq').innerHTML="*please fill  the field * ";
			return	false;
		}

		/*answer*/
		if(ans=="")
		{
			document.getElementById('ans').innerHTML="*please fill  the field * ";
			return	false;
		}
	}
</script>
</body>
</html>