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
        <style type="text/css">
        #loading
         {
        position: fixed;
        width: 100%;
        height: 100vh;  
        background:#fff url('images/tt.gif') no-repeat center; 
        z-index: 1000;
        }
    </style>
        
    </head>
    <body onload="myfunction()">
        <div id="loading"></div>
      <div>
          <?php include('header.php'); ?>
      </div>
        <div id="site_content">
            <div class="container-fluid">
                <div class="row">

                    <?php 
                    if(isset($_GET['product_id'])){
                                $product_id=$_GET['product_id'];
                            }

                    ?>
                    <form method="post" action="cart.php?action=add&code=<?php echo $product_id; ?>">
                    <div class=" col-xs-12" id="content">            
                        <div class="breadcrumbs">
                            <a href="home.php"><i class="fa fa-home"></i></a>
                            <a href=""></a>
                        </div>
                        <div class="row">
                            <?php 
                            
                            $con=mysqli_connect('localhost','root','','medimates');
                            $query=mysqli_query($con,"select * from product where product_id='$product_id'");
                            $result=mysqli_fetch_assoc($query);
                            ?>
                            <div class="col-sm-6">
                              <ul class="thumbnails">
                                    <li>
                                        <a  href="" class="thumbnail fix-box">
                                        <img class="changeimg" src="medimates/<?php echo $result['product_image'];  ?>">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <h1 style="color: #39baf0"><?php echo $result['product_name']; ?></h1>
                                <ul class="list-unstyled product-section">
                                    <li><span>Product by:</span><a href=""><?php echo $result['product_by']; ?></a></li>
                                    <li><span>Availability:</span> <span class="check-stock"><?php echo $result['stock']; ?></span></li>

                                </ul>
                                <ul class="list-unstyled">
                                    <li>
                                        <h2><i class="fa fa-inr"></i><?php echo $result['selling_price']; ?></h2>
                                    </li>
                                    <li class="old_price1 fa fa-inr"><?php echo $result['product_price']; ?></li>
                                </ul>
                                <div id="product">
                                    <div class="form-group">
                                        <label for="input-quantity" class="control-label">Qty</label>
                                        <input type="number" class="form-control" id="input-quantity" size="2" min="1" max="10" value="1" name="qty">
                                        <br>
                                        <a href="addtocart.php?action=addtocart&&prodcut_id=<?php echo $result['product_id'];?>&&qty=1&&selling_price=<?php echo $result['selling_price'];?>"  class="btn btn-primary btn-lg btn-block reg_button">ADD TO CART</a>
                                        </br>
                                        <?php 
                                        if (empty($_SESSION['email'])) 
                                        {
                                            $logcon='<a class="btn btn-primary btn-lg btn-block reg_button" href="login.php" target="blank"><i class="fa fa-shopping-cart"></i> BUY NOW!</a>';
                                        }
                                        else
                                        {
                                            $logcon='<a class="btn btn-primary btn-lg btn-block reg_button" href="checkout.php"><i class="fa fa-shopping-cart"></i> BUY NOW!</a>';
                                        }
                                        ?>
                                        <?php echo $logcon; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#tab-description" aria-expanded="true">Description</a></li>
                                    <li class=""><a data-toggle="tab" href="#tab-review" aria-expanded="false">Reviews</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div id="tab-description" class="tab-pane active">
                                        <div class="row ">
                                            <p><?php echo $result['description']; ?></p>
                                        </div>
                                    </div>
                                    <div id="tab-review" class="tab-pane">
                                        <form id="form-review" class="form-horizontal">
                                            <h2>Write a review</h2>
                                            <div class="form-group required">
                                                <div class="col-sm-12">
                                                    <label for="input-name" class="control-label">Your Name</label>
                                                    <input type="text" class="form-control" id="input-name" value="" name="name">
                                                </div>
                                            </div>
                                            <div class="form-group required">
                                                <div class="col-sm-12">
                                                    <label for="input-review" class="control-label">Your Review</label>
                                                    <textarea class="form-control" id="input-review" rows="5" name="text"></textarea>
                                                </div>
                                            </div>
                                            <div class="buttons clearfix">
                                                <div class="pull-right">
                                                    <button class="btn btn-primary reg_button"  id="button-review" type="button">
                                                        <i class="fa fa-caret-right"></i>&nbsp;
                                                        Continue                       
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
             </div>
        </div>

                </div>
            </div>
        </div>
        <div>
        <?php include('footer.php'); ?>
       </div>
        <a style="display: none" href="javascript:void(0);" class="scrollTop back-to-top" id="back-to-top">
            <i class="fa fa-chevron-up"></i>
        </a>
        <script>
            $("document").ready(function () {

                $(".galleryimg").on("click", function () {
                    var src = $(this).attr('src');
                    console.log(src)
                    $(".changeimg").attr('src', src);
                });
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