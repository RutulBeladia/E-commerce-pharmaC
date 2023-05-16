<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<link rel="icon" href="images/favicon.png"/>
<title>Medimates</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="css/style.css"/> 
<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css"/>
<link rel="stylesheet" href="css/owl-carousel.css"/>
<style type="text/css">
    .footer-text-container {
    border-color: rgba(255,255,255,.53);
    border-radius: 9px;
    border-style: solid;
    border-width: 1px black;
    box-shadow: 0;
    color: #fff;
    font-size: smaller;
    text-align: left;
    margin: 10px 40px 20px;
    padding: 10px 30px 30px;
}
.footer-head {
    color:black;
    font-weight: 700;
    margin-bottom: 8px;
    margin-top: 20px;
}
.footer-sub-text {
    padding-top: 5px;
}
</style>
</head>
<body>
<div id="footer1">
    <div class="container-fluid footer-background">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-sm-6 col-xs-12">
                        <div id="footer_menu">
                            <a href="home.php">Home</a> | 
                            <a href="aboutus.php">About Us</a> | 
                            <a href="contactus.php">Contact Us</a>  
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div id="social_icons" class="pull-right">
                            <a href="https://www.facebook.com/rutul.beldiya.9" class="btn btn-default reg_button"><i class="fa fa-facebook"></i></a>
                            <a href="https://twitter.com/RutulBeladiya" class="btn btn-default reg_button"><i class="fa fa-twitter"></i></a>
                            <a href="https://www.instagram.com/beingrutulbeladiya/" class="btn btn-default reg_button"><i class="fa fa-instagram"></i></a>
                              <a href="#" class="btn btn-default reg_button"><i class="fa fa-whatsapp"></i></a>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <?php 
                        $cn=mysqli_connect('localhost','root','','Medimates');
                        $q=mysqli_query($cn,"select * from site_setting");
                        $ru=mysqli_fetch_assoc($q);
                        ?>
                        <div class="copyright">
                           <?php echo $ru['footer_text']; ?> © 2019 All right reserved by
                            <a href="home.php" target="_blank">PharmaC |</a><a href="www.pharmacstore.com"> <?php echo $ru['email'];?></a>
                            <h4 style="float: right;color:#ef4281;"><span style="color:#000000;">Contact:</span>+91 <?php  echo $ru['contact'];?></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>