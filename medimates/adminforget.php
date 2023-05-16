<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin Login</title>
  <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
  <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="shortcut icon" href="images/logo.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper auth-page">
      <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auto-form-wrapper">
              <form action="#" method="post">
                <div class="form-group">
                  <label for="name" class="label">Email</label>
                  <div class="input-group">
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter Email Address" style="border-radius: 3px;border:1px solid; ">
                  </div>
                   </i><span id="username" class="text-danger form-weight-bold"></span>
                </div>
                <div class="form-group" id="otphd" style="display: none;">
                  <label for="pass" class="label">OTP</label>
                  <div class="input-group">
                    <input type="password" name="pass" id="pass" class="form-control" placeholder="*********" style="border-radius: 3px;border:1px solid;">
                  </div>
                   <span id="pwd" class="text-danger form-weight-bold"></span>
                </div>
                <div class="form-group">
                  <button name="signup" id="signup" onclick="return validation()" class="btn btn-primary submit-btn btn-block">Get OTP</button>
                </div>
                <div class="form-group d-flex justify-content-between">
                  <a href="#" class="text-small forgot-password text-black">Forgot Password</a>
                </div>
              </form>
            </div>
            <p class="footer-text text-center" style="color: black;">copyright © 2019 MediMates. All rights reserved.</p>
          </div>
        </div>
      </div>
      
    </div>
  </div>

    <script type="text/javascript">
  
  function validation()
  {
    var email=document.getElementById('name').value;
    var pwd=document.getElementById('pass').value;
    /*username*/
    if(email=="")
    {
      document.getElementById('name').style.border="1px solid red";
      document.getElementById('username').innerHTML="Please Enter Your Email Id";
      return false;
    }
    else
    {
      
      document.getElementById('otphd').style.display="block";
      document.getElementById('signup').innerHTML="Reset password";
      return false ;
    }
    
  }
</script>
</body>
</html>