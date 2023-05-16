<!DOCTYPE html> 
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<link rel="icon" href="images/logo.png"/>
<title>MediMates</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="css/style.css"/> 
<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css"/>
<link rel="stylesheet" href="css/owl-carousel.css"/>
<link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css">
    <style type="text/css">
        #loading
         {
        position: fixed;
        width: 100%;
        height: 100vh;  
        background:#fff url('images/tt.gif') no-repeat center; 
        z-index: 1000;
        }


/*neel added css*/

.fixed_home_cat {
    position: fixed;
    left: 8px;
    display: block;
    bottom: 50px;
    z-index: 666;
    padding: 4px 13px;
    border-radius: 0px;
   background-color: #bcecb3;
   color:black;

padding: 19px;

border-radius: 7px;

width: 29%;
    -moz-animation: bounce 2.5s infinite linear;
    -o-animation: bounce 2.5s infinite linear;
    -webkit-animation: bounce 0.5s infinite linear;
    animation: bounce 2.5s infinite linear;
}
    
</style>
</head>
<body onload="myfunction()">
<div id="loading"></div>
<?php include('header.php') ?>
<?php $p=$_REQUEST['med'];
    //echo $p;
?>
<div class="container">
    <h2>Selected Product</h2>
</div>
<div class="contentText container-fluid">
        <div class="row margin-top product-layout_width" id="allproduct">
                <?php 
                $con=mysqli_connect('localhost','root','','medimates');
                $q=mysqli_query($con,"select * from product where product_name like '%$p%' OR category like '%$p%' OR sub_category like '%$p%'");
                while ($result=mysqli_fetch_assoc($q))
                {
                ?>
                <form  method="post" action="">
                <!--  --> 
                <div class="product-layout  col-md-3">
                    <div class="product-thumb-height">
                        <div class="product-thumb transition" style="width: 100%">
                            <ul>
                                <li class="li_product_title">
                                    <div class="product_title">
                                        <a href="single-product.php"><?php echo $result['product_name']; ?></a>
                                    </div></li>
                                <li class="li_product_image">
                                    <div class="image" style="height: 200px!important">
                                        <a href="single-product.php?product_id=<?php echo $result['product_id']; ?>">
                                            <img src="medimates/<?php echo $result['product_image'];  ?>" class="img-responsive" width="100%" height="100%"/>
                                        </a>

                                    </div>
                                </li>   
                                <div class="caption"style="padding-top: 100px;">
                                        <p>
                                         <a href="single-product.php"><?php echo substr($result['description'],0,40); ?>..</a>
                                        </p>
                                    </div>
                                <li class="li_product_buy_button">
                                    <div>
                                        <span class="old_price1 "><i class="fa fa-inr "></i><?php echo $result['product_price']; ?></span>
                                    <span class="new_price1"><i class="fa fa-inr"></i><?php echo $result['selling_price']; ?></span>
                                    <span class="saving1"></span>

                                    </div>
<a href="addtocart.php?action=addtocart&&prodcut_id=<?php echo $result['product_id'];?>&&qty=1&&selling_price=<?php echo $result['selling_price'];?>" class="btn btn-default text-bold" style="width:280px;">Add to cart</a>

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                </form>
                 <?php } ?>
        </div>
</div>
    <?php include('footer.php');?>
    <a style="display: none" href="javascript:void(0);" class="scrollTop back-to-top" id="back-to-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    <script>
      var preloader=document.getElementById('loading');

      function myfunction()
      {
        preloader.style.display='none';
      }
  </script>
  <?php if(isset($_REQUEST['addedincart']))
  {?>
  <div class="fixed_home_cat vd_desk ">
&nbsp;&nbsp;
    Product added Successfully 
    <a href="cart.php"><span style="float:left;" class="btn btn-default">VIEW CART</span>
    <a href="aryuveda.php"><span style="float:right;"><img src="https://cdn2.iconfinder.com/data/icons/flat-icons-web/40/Remove-128.png" width="30"></span>
</a>

</div>
<?php } ?>
<script type="text/javascript" src="jquery.bxslider.js"></script>
</body>
</html>