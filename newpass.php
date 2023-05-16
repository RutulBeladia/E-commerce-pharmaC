<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel="icon" href="images/favicon.png"/>
        
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="css/style.css"/> 
        <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css"/>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/custom.js"></script>
    </head>
    <body>
        
                    <div class="col-sm-12" id="content">            
                        <div class="breadcrumbs">
                            <a href="home.php"><i class="fa fa-home"></i></a>
                            <a href="login.php">Login</a>
                        </div>
                        <div class="container-fluid">
                            
                            <div class="row">
                                <div class="col-sm-4"></div>
                                <div  class="col-sm-6">
                                    <!--<div class="well">!-->
                                    <h2 class="text-center ">Create your Password</h2>
                                    <form enctype="multipart/form-data" method="post" action="pnewpass.php"  class="form-horizontal add_margin">
                                       <div class="form-group">
                                            <div class="col-sm-8">
                                                <input type="hidden" class="form-control" id="email" placeholder="E-Mail" id="email" value="<?php echo $_SESSION['email'];?>"  name="email">
                                                <span id="e-mail" style="color:red;"></span>
                                            </div>
                                        
                                    </div>
                                        <div class="form-group">
                                             <fieldset>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Password</label>
                                        
                                        <div class="col-sm-8">
                                          <input type="password" value="" class="form-control" name="password" id="pwd">
                                          <span id="pw" style="color:red;"></span>
                                        </div>
                                        
                                    </div>

                                </fieldset>
                                <fieldset>
                                   
                                    <div class="form-group">
                                        <label class="col-sm-3   control-label">Confirm Password</label>
                                        
                                        <div class="col-sm-8">
                                          <input type="password" value="" class="form-control" name="cpass" id="pwd1">
                                           <span id="pwd2" style="color:red;"></span>
                                        </div>
                                       
                                    </div>
                                </fieldset>

                                        </div>
                                      
                                        <div class="col-sm-8"></div>
                                        <div class="row">
                                        <input type="submit" name="submit" class="btn btn-danger  reg_buttonv text-center" style="padding-left:25px;  padding-right:25px;" onclick="return log()">
                                    </div>
                                    </form>
                                  <script type="text/javascript">
                                      function log()
                                      {
                                         var password=document.getElementById('pwd').value;
                                        var password1=document.getElementById('pwd1').value;
                                        if (password=="")
                                         {
                                            document.getElementById('pw').innerHTML="*please fill the field*";
                                            return false;
                                         }

                                        if (password1=="")
                                         {
                                            document.getElementById('pwd2').innerHTML="*please fill the field*";
                                            return false;
                                         }
                                         if(password1!=password)
                                         {
                                            document.getElementById('pwd2').innerHTML="*password must be same*";
                                            return false;     
                                         }
                                     }

                                  </script> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <a style="display: none" href="javascript:void(0);" class="scrollTop back-to-top" id="back-to-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </body>
</html> 
