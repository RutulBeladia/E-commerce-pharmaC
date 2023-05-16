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
              <form action="plogin.php" method="post">
                <div class="form-group">
                  <label for="name" class="label">Admin</label>
                  <div class="input-group">
                    <input type="text" class="form-control" name="name" id="name" placeholder="Admin Name" style="border-radius: 3px;border:1px solid; ">
                  </div>
                   </i><span id="username" class="text-danger form-weight-bold"></span>
                </div>
                <div class="form-group">
                  <label for="pass" class="label">Password</label>
                  <div class="input-group">
                    <input type="password" name="pass" id="pass" class="form-control" placeholder="*********" style="border-radius: 3px;border:1px solid;">
                  </div>
                   <span id="pwd" class="text-danger form-weight-bold"></span>
                </div>
                <div class="form-group">
                  <button name="signup" type="submit" id="signup" onclick="return validation()" class="btn btn-primary submit-btn btn-block">Login</button>
                </div>
                <div class="form-group d-flex justify-content-between">
                  <a href="adminforget.php" class="text-small forgot-password text-black">Forgot Password</a><a href="admin_reg.php" class="text-small forgot-password text-blue">Create New Account!!!</a>
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
    var user=document.getElementById('name').value;
    var pwd=document.getElementById('pass').value;
    /*username*/
    if(user=="")
    {
      document.getElementById('name').style.border="1px solid red";
      document.getElementById('username').innerHTML="Please Enter Your Name";
      return false;
    }
    if(user.length < 2)
    {
      document.getElementById('name').style.border="1px solid red";
      document.getElementById('username').innerHTML="Name Is Not Valid";
      return  false;
    }
    if(!isNaN(user))
    {
      document.getElementById('name').style.border="1px solid red";
      document.getElementById('username').innerHTML="Number Is Not Allowed";
      return false;
    }

    /*password*/
    if(pwd=="")
    {
      document.getElementById('pass').style.border="1px solid red";
      document.getElementById('pwd').innerHTML="Please Enter Password";
      return false;
    }
    if((pwd.length <=5) || (pwd.length >10))
    {
      document.getElementById('pass').style.border="1px solid red";
      document.getElementById('pwd').innerHTML="Password Must Be  6 Character Long";
      return false;
    }
  }
</script>
</body>
</html>