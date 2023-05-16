<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<link rel="icon" href="images/favicon.png"/>
<title></title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="css/style.css"/> 
<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css"/>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/custom.js"></script>
</head>
<body>
 <div>       
<!--sidebar -->
<div id="site_content">
    <div class="container-fluid">
        <div class="row"><aside class="col-sm-3 hidden-xs" id="column-left">
               
            </aside>
            <div class="col-sm-12" id="content">            <div class="breadcrumbs">
                    <a href="home.php"><i class="fa fa-home"></i></a>
                    <a href="registration.php">Register</a>
                </div>
                <h1>My Account Information</h1>
                <p> <small><strong class="define_note"></strong></small>If you already have an account with us, please login at the 
                    <a href="login.php">login page</a>.</p>
                <form action="insert_mail.php" class="form-horizontal" method="post">
                    <div class="contentText">  
                        <fieldset id="account">
                            <h1>Your Personal Details</h1>
                    
                            <div class="form-group required">
                                <label for="input-firstname" class="col-sm-2 control-label">First Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="firstname" placeholder="First Name" value="" name="firstname">
                                    <span id="f_name" style="color:red;"></span>
                                </div>
                            </div>
                            <div class="form-group required">
                                <label for="input-lastname" class="col-sm-2 control-label">Last Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="lastname" placeholder="Last Name" value="" name="lastname">
                                    <span id="l_name" style="color:red;"></span>
                                </div>
                            </div>
                            <div class="form-group required">
                                <label for="input-email" class="col-sm-2 control-label">E-Mail</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="e-mail" placeholder="E-Mail" value="" name="email">
                                    <span id="email" style="color:red;"></span>
                                </div>
                            </div>
                            <div class="form-group required">
                                <label for="input-telephone" class="col-sm-2 control-label">Telephone</label>
                                <div class="col-sm-10">
                                    <input type="tel" class="form-control" id="telephone" placeholder="Telephone" value="" name="telephone">
                                    <span id="t_phone" style="color:red;"></span>
                                </div>
                            </div>
                           
                        </fieldset>
                        <fieldset id="address">
                            <h1>Your Address</h1>
                            <div class="form-group required">
                                <label for="input-address-1" class="col-sm-2 control-label">Address</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="address-1" placeholder="Address" value="" name="address_1">
                                    <span id="add" style="color:red;"></span>
                                </div>
                            </div>
                           
                            <div class="form-group required">
                                <label for="input-city" class="col-sm-2 control-label">City</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="city" placeholder="City" value="" name="city">
                                    <span id="cit" style="color:red;"></span>
                                </div>
                            </div>
                            <div class="form-group required">
                                <label for="input-postcode" class="col-sm-2 control-label">Post Code</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="postcode" placeholder="Post Code" value="" name="postcode">
                                    <span id="p_code" style="color:red;"></span>
                                </div>
                            </div>
                            <div class="form-group required">
                                <label for="input-country" class="col-sm-2 control-label">Country</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="country" name="country_id">
                                        <option value=""> --- Please Select --- </option>
                                        <option hidden  disabled selected class="text-muted">Choose Your Country</option>
                                       <?php
                                          $cn=mysqli_connect('localhost','root','','medimates');
                                          $q=mysqli_query($cn,"select * from tblcountry");
                                          while($result=mysqli_fetch_assoc($q))
                                          {
                                        ?>
                        <option value="<?php echo  $result['Country']; ?>"><?php echo  $result['Country']; ?></option>
                        <?php
                      }

                    ?>
                                    </select> 
                                    <span id="cntry" style="color:red;"></span>
                                </div>
                            </div>
                            <div class="form-group required">
                                <label for="input-zone" class="col-sm-2 control-label">Region / State</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="zone" name="zone_id">
                                        <option hidden  disabled selected class="text-muted">Choose Your State</option>
                                       <?php
                                          $cn=mysqli_connect('localhost','root','','medimates');
                                          $q=mysqli_query($cn,"select * from tblstate");
                                          while($result=mysqli_fetch_assoc($q))
                                          {
                                        ?>
                        <option value="<?php echo  $result['State']; ?>"><?php echo  $result['State']; ?></option>
                        <?php
                      }

                    ?>
                                    </select>
                                    <span id="zn" style="color:red;"></span>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <h1>Your Password</h1>
                            <div class="form-group required">
                                <label for="input-password" class="col-sm-2 control-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="password1" placeholder="Password" value="" name="password">
                                    <span id="pwd" style="color:red;"></span>
                                </div>
                            </div>
                            <div class="form-group required">
                                <label for="input-confirm" class="col-sm-2 control-label">Password Confirm</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="password2" placeholder="Password Confirm" value="" name="confirm">
                                    <span id="cpwd" style="color:red;"></span>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <h1>Security Question</h1>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Question</label>
                                
                                <div class="col-sm-10">
                                   <select class="form-control" name="squ" id="sque">
                                     <option value=""> --- Please Select --- </option>
                                    <option>Who is your daddy?</option>
                                    <option>Who is your mummy?</option>
                                    <option>Who is your sister?</option>
                                    <option>Who is your brother?</option>
                                    <option>Who is your favorite  color?</option>
                                    <option>Who is your lifepatner?</option>
                                    <option>Who is your childhood friend?</option>
                                    <option>Who is your favorite celebrity?</option>
                                </select>
                                <span id="sques" style="color:red;"></span>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                           
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Answer</label>
                                
                                <div class="col-sm-10">
                                  <input type="text" value="" class="form-control" id="answer" name="answer">
                                  <span id="ans" style="color:red;"></span>
                                </div>
                            </div>
                        </fieldset>
                        <div class="buttons">
                            <div class="pull-right">I have read and agree to the <a class="agree" href="#"><b>Privacy Policy</b></a>                                                        <input type="checkbox" value="1" name="agree">
                                &nbsp;
                                <input type="submit" class="btn btn-primary reg_button" value="submit" onclick="return reg()">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>
<a style="display: none" href="javascript:void(0);" class="scrollTop back-to-top" id="back-to-top">
    <i class="fa fa-chevron-up"></i>
</a>
        

<script type="text/javascript">
  function reg()
  {
    var fname=document.getElementById('firstname').value;
    var lname=document.getElementById('lastname').value;
    var username=document.getElementById('e-mail').value;
    var eml=document.getElementById('e-mail').value;
    var atpos=eml.indexOf("@");
    var dtpos=eml.indexOf(".");
    var tphone=document.getElementById('telephone').value;
    var address=document.getElementById('address-1').value;
    var city=document.getElementById('city').value;
    var pcode=document.getElementById('postcode').value;
    var cntry=document.getElementById('country').value;
    var state=document.getElementById('zone').value;
    var pwd1=document.getElementById('password1').value;
    var pwd2=document.getElementById('password2').value;
    var sq=document.getElementById('sque').value;
    var ans=document.getElementById('answer').value;

     if (fname=="")
     {
        document.getElementById('f_name').innerHTML="*please fill the field*";
        return false;
     }
     if (lname=="")
     {
        document.getElementById('l_name').innerHTML="*please fill the field*";
        return false;
     }
    if (username=="")
     {
        document.getElementById('email').innerHTML="*please fill the field*";
        return false;
     }
      if(atpos<1 || (atpos+5 >=dtpos))
    {
        document.getElementById('email').innerHTML="* Invalid Email *";
        return false;
    }
     if (tphone=="")
     {
        document.getElementById('t_phone').innerHTML="*please fill the field*";
        return false;
     }
     if (address=="")
     {
        document.getElementById('add').innerHTML="*please fill the field*";
        return false;
     }
     if (city=="")
     {
        document.getElementById('cit').innerHTML="*please fill the field*";
        return false;
     }
     if (pcode=="")
     {
        document.getElementById('p_code').innerHTML="*please fill the field*";
        return false;
     }
     if (cntry=="")
     {
        document.getElementById('cntry').innerHTML="*please fill the field*";
        return false;
     }
     if (state=="")
     {
        document.getElementById('zn').innerHTML="*please fill the field*";
        return false;
     }
     if (pwd1=="")
     {
        document.getElementById('pwd').innerHTML="*please fill the field*";
        return false;
     }
     if (pwd2=="")
     {
        document.getElementById('cpwd').innerHTML="*please fill the field*";
        return false;
     }
     if(pwd2!=pwd1)
     {
        document.getElementById('cpwd').innerHTML="*password must be same*";
        return false;
     }
     if (sq=="")
     {
        document.getElementById('sques').innerHTML="*please fill the field*";
        return false;
     }
     if (ans=="")
     {
        document.getElementById('ans').innerHTML="*please fill the field*";
        return false;
     }  
  }                         
</script>
</div> 
</body>
</html> 