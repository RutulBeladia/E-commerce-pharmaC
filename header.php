<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<link rel="icon" href="images/logo.png"/>
<title>PharmaC</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="css/style.css"/> 
<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css"/>
<link rel="stylesheet" href="css/owl-carousel.css"/>
</head>
<body>
    
<div class="container">
    <div class="row">
        <?php
              $cn=mysqli_connect('localhost','root','','medimates');
              $s=mysqli_query($cn,"select * from site_setting");
              $ru=mysqli_fetch_assoc($s);
            ?>
           
        <div class="col-md-4 col-sm-4 col-xs-4" id="logo">
            <a href="home.php" class="logo-text">
                <img src="medimates/<?php echo $ru['logo']; ?>">
            </a>		
        </div>
        <div class="col-md-4 col-md-offset-4 col-sm-offset-2  col-sm-6 col-xs-12" style="padding-top:70px; ">
            <div id="top_right" style="width:240px !important">
                <div id="cart">
                    <div class="text">
                        <div class="img">
                            <?php 
                            if(isset($_SESSION['email']))
                            {
                            $a=mysqli_connect('localhost','root','','medimates');
                            $qu=mysqli_query($a,"select * from addtocart where customer_id='".$_SESSION['email']."'");
                            $numa=mysqli_num_rows($qu);
                            }
                            else
                            {}
                            ?>
                            <a href="cart.php"> <img class="img-responsive" src="images/cart.png" alt="" title="" width="26" height="27" />
                        </div><span>Your cart:</span><span class="cart_items">
                        (<?php if(isset($numa)){ echo $numa;}else{echo "0";}?> items)</span></a>
                    </div> 
                </div>
                <div id="bottom_right">
                 <?php       
                            if(isset($_SESSION['email']))
                            {

                               
                            $email=$_SESSION['email'];
                            $cn=mysqli_connect('localhost','root','','medimates');
                            $q=mysqli_query($cn,"select * from user where Email='$email'");
                            $result=mysqli_fetch_assoc($q);
                            $cid=$result['customer_id'];
                            $_SESSION['cid']=$cid;
 ?>
                              
                        <?php     }
                        else
                        {
                ?>
                    <div class="row">
                        <div class="col-md-6 col-xs-6 wd_auto">
                            <div class="left">
                                <div class="login">
                                    <a class="btn btn-default reg_button" href="login.php">Login</a> 
                                    <a class="btn btn-default reg_button" href="registration.php">Signup</a>
                                    
                                </div>			
                            </div>
                        </div> 
                        <div class="dropdown-bn wd-33 col-md-6 remove_PL col-xs-6">
                            <div class="row">
                               <div class="pl_0 col-md-6 col-xs-6">
                                    <div class="dropdown btn-group">
                                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">                                                
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                <?php } ?>
                </div>
            </div>

        </div>
    </div>
 </div> 
<div class="container-fluid bg-color" >
	    <div class="row">
	        <div class="container"style="cursor: pointer;" >
	            <div class="row">
	                <div class="col-md-12 col-xs-12">
	                    <nav  role="navigation" class="navbar navbar-inverse" id="nav_show">
	                        <div id="nav">
	                            <div class="navbar-header">
	                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	                                    <span class="icon-bar"></span>
	                                    <span class="icon-bar"></span>
	                                    <span class="icon-bar"></span>
	                                </button>

	                            </div>
	                            <div class="collapse navbar-collapse" id="myNavbar">
	                                <ul class="nav navbar-nav site_nav_menu1" style="position:;width: 100%;top: 0;z-index: 20;"  >
	                                    <li class="first "><a href="home.php">Home</a></li>
                                         <li><a href="prescription.php">Prescription</a></li>
	                                    <li><a href="aboutus.php">About us</a></li>
	                                    <li><a href="contactus.php">Contact Us</a></li>

                                         <?php if(isset($_SESSION['email'])){ ?>
                                    <div class="dropdown" style="float: right;padding-top:15px;color: #fff;">
                                        <span class="dropdown-toggle" type="button" data-toggle="dropdown">
                                <span  class=" text-bold text-center">Hii,<?php  echo $result['Fname'];?></span>
                                  
                                 <i class="glyphicon glyphicon-menu-down "></i></span>
                                  <ul class="dropdown-menu">
                                    <li><a href="account.php">My Account</a></li>
                                    <li><a href="userorders.php">Order Histroy</a></li>
                                    <li><a href="mypriscription.php">My Prescription</a></li>
                                    <li><a href="mypriscription.php?reminder">My reminder</a></li>
                                    <li><a href="logout.php">Logout</a></li>
                                  </ul>
                                </div>
                            <?php } ?>
                                </div>
	                                </ul>
                                   
	                        </div>
	                    </nav>
	                </div>
	            </div> 

	        </div>
	    </div>
	</div>
<div class="container">
    <div class="row" id="search_manu" style="margin-top: 10px">
        <div class="col-md-6 col-xs-12"> 
            <form  name="quick_find" method="post">
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" placeholder="Enter your Product here" class="form-control input-lg" id="inputGroup" name="medicine"/>  
                        <span class="input-group-addon" style="background-color:#ef4281  !important;}">
                             <button type="submit"  name="search" class="btn" style="
                             background-color: transparent;color:#fff;">Search</button> 
                          <!-- 
                           <a href="select_product.php?search=<?php //echo $_POST['medicine'];?>">SEARCH</a>
 -->                        </span>
                    </div>
                   <?php 
                    if(isset($_REQUEST['search']))
                    {
                     $medi = $_POST['medicine'];
                     //echo $medi;
                      echo "<script>window.location='select_product.php?med=$medi'</script>" ;
                        //header('location:home.php?');
                    }
                   ?> 
                </div>
            </form>
        </div>
        <div class="upload-btncol">

            <label class="up-fileupload">
                
                <a href="uploadparchi.php">
                <input type="button" name="files[]" id="imgInp" title="Select a file(s)" multiple="" value="Upload Priscription" style="background-color:transparent;border:none;color: #fff;font-style: bold;padding: 4px;">
           </a> </label>
            <style type="text/css">
                .upload-btncol .up-fileupload {
                    overflow: hidden;

                    filter: alpha(opacity=0);
                    position: relative;
                    background: #ef4281;
                    float: left;
                    color: #fff;
                    width: 250px;
                    font-size: 15px;
                    font-weight: normal;
                    padding: 10px 0;
                    text-align: center;
                }
                .upload-btncol .up-fileupload [type=file] {
                    cursor: inherit;
                    display: block;
                    filter: alpha(opacity=0);
                    min-height: 100%;
                    min-width: 100%;
                    opacity: 0;
                    position: absolute;
                    right: 0;
                    text-align: right;
                    top: 0;
                    cursor: pointer;
                }
            </style>
        </div>
    </div>
</div>
<!-- scripts -->
<script src="js/jquery.min.js"></script>
<script src="js/owl-carousel.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>