<?php
$cn=mysqli_connect('localhost','root','','medimates');
?>
<!DOCTYPE html> 
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<link rel="icon" href="images/logo.png"/>
<title>PharmaC</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="css/style.css"/> 
<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css"/>
<link rel="stylesheet" href="css/owl-carousel.css"/>
<style type="text/css">
    .heading-popular{
        font-family: Trojen pro;
        font-size: 30px;
        font-weight: bold; 
    }
    .category-image{
        margin-top: 20px;
    }
    .category-name {
    bottom: 0;
    width:90%; 
    text-align: center;
    position: absolute;
    font-size: 20px;
    color: #fff;
    background-color: rgba(3,26,35,.7);
    font-family: "Clear Sans Light";
  
    }
    .category-name:hover{
        background-color:#7aa307;
    }
    #loading
    {
        position: fixed;
        width: 100%;
        height: 100vh;  
        background:#fff url('images/tt.gif') no-repeat center; 
        z-index: 1000;
    }
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
    <div id="loading">
    </div>
<?php include('header.php'); ?>
<div class="panel panel-group" >
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0"  style="border: 1px solid black;"></li>
    <li data-target="#myCarousel" data-slide-to="1" style="border: 1px solid black;"></li>
    <li data-target="#myCarousel" data-slide-to="2"  class="active"style="border: 1px solid black;"></li>
  </ol>
  <div class="carousel-inner">
    <div class="item active">
       <img src="medimates/images/s1.jpg">
   </div>
    <?php
       
        $sel=mysqli_query($cn,"select * from slider");
        while($display=mysqli_fetch_array($sel))
        {
     ?>
     <div class="item">
         <img src="medimates/<?php echo $display['image']; ?>" height="100%" width="100%">
     </div>
 <?php } ?>
    </div>
     <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div id="site_content">
    <div class="container">
            <div class="container container-background">
                <div class="row">
                <div class="col-md-12 text-center font-weight-bold heading-popular">Popular Health Product Category</div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <a href="healthproduct.php">
                        <div class="indivisual-category" >
                            <div class="category-image">
                                <img src="cate_img/1img.webp" style="width: 260px;height: 260px; float: center;">
                                <div class="category-name">Health Products</div>
                            </div>
                        </div></a>
                    </div>
                    <div class="col-md-3"  >
                        <a href="daibetescare.php">
                        <div class="indivisual-category"  >
                            <div class="category-image">
                                <img src="cate_img/DiabetesCare.webp" style="width: 260px;height: 260px;">
                                <div class="category-name">DiabetesCare</div>
                            </div>
                        </div></a>
                    </div>
                    <div class="col-md-3" >
                        <a href="aryuveda.php">
                        <div class="indivisual-category"  >
                            <div class="category-image">
                                <img src="cate_img/Ayurveda.webp" style="width: 260px;height: 260px;">
                                <div class="category-name">Ayurveda</div>
                            </div>
                        </div></a>
                    </div>
                    <div class="col-md-3" >
                        <a href="vitamin.php">
                        <div class="indivisual-category"  >
                            <div class="category-image">
                                <img src="cate_img/Vitamins & Supplements.webp" style="width: 260px;height: 260px;">
                                <div class="category-name">Vitamins & Supplements</div>
                            </div>
                        </div></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3" >
                        <a href=""></a>
                        <div class="indivisual-category"  >
                            <div class="category-image">
                                <img src="cate_img/Homeopathy.webp" style="width: 260px;height: 260px;">
                                <div class="category-name">Homeopathy</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" >
                        <a href=""></a>
                        <div class="indivisual-category"  >
                            <div class="category-image">
                                <img src="cate_img/HairCare.webp" style="width: 260px;height: 260px;">
                                <div class="category-name">Hair Care</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" >
                        <a href=""></a>
                        <div class="indivisual-category"  >
                            <div class="category-image">
                                <img src="cate_img/Healthcare Devices.webp" style="width: 260px;height: 260px;">
                                <div class="category-name">Healthcare Devices</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" >
                        <a href=""></a>
                        <div class="indivisual-category"  >
                            <div class="category-image">
                                <img src="cate_img/Skin Care.webp" style="width: 260px;height: 260px;">
                                <div class="category-name">Skin Care</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3" >
                        <a href=""></a>
                        <div class="indivisual-category"  >
                            <div class="category-image">
                                <img src="cate_img/Elderly Care.webp" style="width: 260px;height: 260px;">
                                <div class="category-name">Elderly Care</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" >
                        <a href=""></a>
                        <div class="indivisual-category"  >
                            <div class="category-image">
                                <img src="cate_img/Quit Smoking.webp" style="width: 260px;height: 260px;">
                                <div class="category-name">Quit Smoking</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" >
                        <a href=""></a>
                        <div class="indivisual-category"  >
                            <div class="category-image">
                                <img src="cate_img/Baby & Child Care.webp" style="width: 260px;height: 260px;">
                                <div class="category-name">Baby & Child Care</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" >
                        <a href=""></a>
                        <div class="indivisual-category"  >
                            <div class="category-image">
                                <img src="cate_img/Dabur.webp" style="width: 260px;height: 260px;">
                                <div class="category-name">Dabur</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3" >
                        <a href=""></a>
                        <div class="indivisual-category"  >
                            <div class="category-image">
                                <img src="cate_img/Women Care.webp" style="width: 260px;height: 260px;">
                                <div class="category-name">Women Care</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" >
                        <a href=""></a>
                        <div class="indivisual-category"  >
                            <div class="category-image">
                                <img src="cate_img/Protein Supplements.webp" style="width: 260px;height: 260px;">
                                <div class="category-name">Protein Supplements</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" >
                        <a href=""></a>
                        <div class="indivisual-category"  >
                            <div class="category-image">
                                <img src="cate_img/Respiratory Care.webp" style="width: 260px;height: 260px;">
                                <div class="category-name">Respiratory Care</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" >
                        <a href=""></a>
                        <div class="indivisual-category"  >
                            <div class="category-image">
                                <img src="cate_img/Accu-Chek.webp" style="width: 260px;height: 260px;">
                                <div class="category-name">Accu-Chek</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3" >
                        <a href=""></a>
                        <div class="indivisual-category"  >
                            <div class="category-image">
                                <img src="cate_img/Himalaya.webp" style="width: 260px;height: 260px;">
                                <div class="category-name">Himalaya</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" >
                        <a href=""></a>
                        <div class="indivisual-category"  >
                            <div class="category-image">
                                <img src="cate_img/Unani Medicines.webp" style="width: 260px;height: 260px;">
                                <div class="category-name">Unani Medicines</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" >
                        <a href=""></a>
                        <div class="indivisual-category"  >
                            <div class="category-image">
                                <img src="cate_img/Bone, Joint & Muscle Care.webp" style="width: 260px;height: 260px;">
                                <div class="category-name">Bone, Joint & Muscle Care</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" >
                        <a href=""></a>
                        <div class="indivisual-category"  >
                            <div class="category-image">
                                <img src="cate_img/Oral Care.webp" style="width: 260px;height: 260px;">
                                <div class="category-name">Oral Care</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3" >
                        <a href=""></a>
                        <div class="indivisual-category"  >
                            <div class="category-image">
                                <img src="cate_img/Cough And Cold.webp" style="width: 260px;height: 260px;">
                                <div class="category-name">Cough And Cold</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" >
                        <a href=""></a>
                        <div class="indivisual-category"  >
                            <div class="category-image">
                                <img src="cate_img/Immunity Boosters.webp" style="width: 260px;height: 260px;">
                                <div class="category-name">Immunity Boosters</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" >
                        <a href=""></a>
                        <div class="indivisual-category"  >
                            <div class="category-image">
                                <img src="cate_img/Mosquito Repellents.webp" style="width: 260px;height: 260px;">
                                <div class="category-name">Mosquito Repellents</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" >
                        <a href=""></a>
                        <div class="indivisual-category"  >
                            <div class="category-image">
                                <img src="cate_img/Children Wellness.webp" style="width: 260px;height: 260px;">
                                <div class="category-name">Children Wellness</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include('footer.php'); ?>
<a style="display: none" href="javascript:void(0);" class="scrollTop back-to-top" id="back-to-top">
<i class="fa fa-chevron-up"></i>
</a>
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
 <script>
    $(document).ready(function(){
      $('.slider').bxSlider();
    });
  </script>
  <script>
      var preloader=document.getElementById('loading');

      function myfunction()
      {
        preloader.style.display='none';
      }
  </script>
</body>
</html> 