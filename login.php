<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel="icon" href="images/favicon.png"/>
        <title>MediStore</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="css/style.css"/> 
        <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css"/>
        <link rel="stylesheet" type="text/css" href="css/login.css">
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/custom.js"></script>
        <style type="text/css">
            body{
                display:-ms-flexbox;
                display: flex;
                -ms-flex-align:center;
                flex-align:center;
                margin-top:50px; 
                padding-top: 50px;
                padding-bottom: 40px;
                height: 100%;
            }
        </style>
    </head>
    <body>
        <div class="container" style="margin: auto;">
        <div class="jumbotron logbackbig">            
            <div class="breadcrumbs" style="margin: 0px;">
                <a href="home.php"><i class="fa fa-home"></i></a>
                <a href="login.php">Login</a>
            </div>
            <div class="container" style="color:black;">
                <div class="logback">
                    <h2 class="text-center">Customer Login</h2>
                    <form action="plogin.php" method="post">
                        <input type="text" placeholder="Email" name="email" id="email">
                        <span id="e-mail" style="color:red;"></span>
                        <input type="password" placeholder="Password" name="pwd" id="pwd">
                        <span id="pass" style="color:red;"></span>
                        <input class="btn btn-default" type="submit" value="LOGIN" onclick="return log()" >
                        <h5>don't have an account?</h5>
                        <a class="badge" href="registration.php" target="_blank">Registration</a>
                        <a class="badge" href="forget.php" target="_blank">forget password?</a>      
                    </form>
                    <script type="text/javascript">
                        function log()
                        {
                            var username=document.getElementById('email').value;
                            var password=document.getElementById('pwd').value;
                            var eml=document.getElementById('email').value;
                            var atpos=eml.indexOf("@");
                            var dtpos=eml.indexOf(".");

                            if (username=="")
                             {
                                document.getElementById('e-mail').innerHTML="*INVALID EMAIL*";
                                return false;
                             }
                              if(atpos<1 || (atpos+5 >=dtpos))
                            {   
                                document.getElementById('e-mail').innerHTML="* Invalid Email *";
                                return false;
                            }

                            if (password=="")
                            {
                                document.getElementById('pass').innerHTML="*INVALID PASSWORD*";
                                return false;
                            }
                        }
                    </script>
                </div>
            </div>
        </div>
        </div>
        <a style="display: none" href="javascript:void(0);" class="scrollTop back-to-top" id="back-to-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </body>
</html> 
