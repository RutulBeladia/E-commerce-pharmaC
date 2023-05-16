<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<title>MediMates</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="css/style.css"/> 
<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css"/>

<style type="text/css">
    .empty{
        background:#fff;
        box-shadow:0px 2px 5px black;
         padding: 10px;
         float: right;"
    }
    .empty:hover{
        background:powderblue;
    }
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
     <?php include('header.php');?>
      <!-- cart code start-->
    <?php
        //session_start();
        require_once("dbcontroller.php");
        $db_handle = new DBController();
        if(!empty($_GET["action"])) {
        switch($_GET["action"]) {
            case "add":
        if(!empty($_POST["qty"])) {
            $productByCode = $db_handle->runQuery("SELECT * FROM product WHERE product_id='" . $_GET["code"] . "'");
            $itemArray = array($productByCode[0]["product_id"]=>array('name'=>$productByCode[0]["product_name"], 'code'=>$productByCode[0]["product_id"], 'quantity'=>$_POST["qty"], 'price'=>$productByCode[0]["selling_price"], 'image'=>$productByCode[0]["product_image"]));
            
            if(!empty($_SESSION["cart_item"])) {
                if(in_array($productByCode[0]["product_id"],array_keys($_SESSION["cart_item"]))) {
                    foreach($_SESSION["cart_item"] as $k => $v) {
                            if($productByCode[0]["product_id"] == $k) {
                                if(empty($_SESSION["cart_item"][$k]["quantity"])) {
                                    $_SESSION["cart_item"][$k]["quantity"] = 0;
                                }
                                $_SESSION["cart_item"][$k]["quantity"] += $_POST["qty"];
                            }
                    }
                } else {
                    $_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
                }
            } else {
                $_SESSION["cart_item"] = $itemArray;
            }
        }
    break;
    case "remove":
        if(!empty($_SESSION["cart_item"])) {
            foreach($_SESSION["cart_item"] as $k => $v) {
                    if($_GET["code"] == $k)
                        unset($_SESSION["cart_item"][$k]);              
                    if(empty($_SESSION["cart_item"]))
                        unset($_SESSION["cart_item"]);
            }
        }
    break;
    case "empty":
        unset($_SESSION["cart_item"]);
    break;  

   
}
}
?>
      <!-- end code -->
        <div class="main-content">
            <div class="container cart-block-style">          
                <div class="breadcrumbs">
                    <a href="home.php"><i class="fa fa-home"></i></a>
                    <a href="#">Shopping Cart</a>
                </div>
                <div class="contentText">
                    <h1>Shopping Cart                                
                    </h1>
                </div>
                <form method="post" action="">
                    <?php 
/*
                        $con=mysqli_connect('localhost','root','','medimates');
                        $cid=mysqli_query($con,"select * from user where Email='".$_SESSION['email']."'");
                        $re=mysqli_fetch_assoc($cid);
                        $c_id=$re['customer_id'];
                        if(isset($_GET['add_id']) && isset($_SESSION['email']))
                        { 

                            $c=mysqli_query($con,"select * from product where product_id='".$_GET['add_id']."'");
                            $r=mysqli_fetch_assoc($c);
                            $sprice=$r['selling_price'];
                            $qty=1;

                            $pid=$_GET['add_id'];
                            $insert=mysqli_query($con,"insert into addtocart values('','$pid',
                                '$c_id','$qty','$sprice',0)");
                            if($insert)
                            {
                                echo "inserted";
                            }   
                            else
                            {
                                echo mysqli_error($con);
//                                echo "There is some problem to add product in cart";
                            }
                        }
                        else
                        {
                            echo "<script> window.location.href='login.php'; </script>";
                        }
                           
                            $cartquery=mysqli_query($con,"select * from addtocart where customer_id='$c_id' and status=0");*/
                         
                        ?>
             
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <td class="text-center">PRODUCT</td>
                                    <td class="text-left">PRODUCT NAME</td>
                                    <td class="text-right">UNIT PRICE</td>
                                    <td class="text-left">QUANTITY</td>
                                    <td class="text-right">TOTAL</td>
                                    <td class="text-right">ACTION</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                        
                                if(isset($_SESSION['email']))
                                {
                                    $con=mysqli_connect('localhost','root','','medimates');
                                    $q=mysqli_query($con,"select addtocart.*,product.product_id,product_image,product_name from addtocart INNER JOIN product ON addtocart.product_id=product.product_id where addtocart.customer_id='".$_SESSION['email']."' ");
                                    if (isset($_GET['add_id'])) 
                                    {
                                        $id=$_GET['add_id'];
                                        $del=mysqli_query($con,"delete from addtocart where add_id=$id");
                                        echo "<script>window.location.href='cart.php'</script>";
                                    }
                                    
                                    while($cd=mysqli_fetch_assoc($q))
                                    { 
                                
                                ?>
                                <tr>
                                    <td class="text-center"><img src="medimates/<?php echo $cd['product_image']; ?>" style="width:50px;height:50px;"></td>
                                    <td><?php echo $cd['product_name']; ?></td>
                                    <td class="text-center"><i class="fa fa-inr"></i><?php  echo $cd['selling_price'];?></td>
                                    <td class="text-center"><?php echo $cd['product_quantity'];?></td>
                                    <td class="text-center"><i class="fa fa-inr"></i><?php $sp=$cd['selling_price'];$pqty=$cd['product_quantity']; echo $sp*$pqty;?></td>
                                    <td class="text-center"><a href="cart.php?add_id=<?php echo $cd['add_id']; ?>"><img src="images/delete-icon.png" style="width:50px;height:50px;"></a></td>
                                </tr>     
                                
                                <?php } ?>
                            <?php }
                                else 
                                { 
                                    echo "<script>window.location.href='login.php'</script>";
                                } ?>
                            </tbody>
                        </table>
                    </div>
                </form>
                
                <br>
                <div class="buttons">
                    <div class="pull-left"><a class="btn btn-default"
                     href="home.php"><i class="fa fa-caret-right"></i>&nbsp;Continue Shopping</a></div>
                    <div class="pull-right"><a class="btn btn-primary reg_button" href="checkout.php">Checkout</a></div>
                </div>
            </div>
        </div>
       <div>
            <?php  include('footer.php'); ?>
        </div>
        <a style="display: none" href="javascript:void(0);" class="scrollTop back-to-top" id="back-to-top">
            <i class="fa fa-chevron-up"></i>
        </a>
<!-- Scripts -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/custom.js"></script>
<script>
      var preloader=document.getElementById('loading');

      function myfunction()
      {
        preloader.style.display='none';
      }
  </script>
</body>
</html> 