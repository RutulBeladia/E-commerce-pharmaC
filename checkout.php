<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<link rel="icon" href="images/favicon.png"/>
<title>MediMates</title>
<link rel="stylesheet" type="text/css" href="css/style.css"/> 
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="css/style.css"/> 
<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css"/>
<style type="text/css">
/*#loading
 {
position: fixed;
width: 100%;
height: 100vh;  
background:#fff url('images/tt.gif') no-repeat center; 
z-index: 1000;
}*/
.card{
	
	background:#fff; 
	box-shadow: 0 0 10px 1px powderblue;
	width: 500px;
	padding: 10px;
	margin: 20px;
}
</style>
</head>
<body onload="myfunction()">
 <div id="loading"></div>
<div>
       <?php include('header.php'); ?>
<div class="main-content">
	<div class="container-fluid checkout">
    	<div class="breadcrumbs">
        	<a href="home.php"><i class="fa fa-home"></i></a>
        	<a href="checkout.php">Checkout</a>
    	</div>
    	<h2 class="text-center text-uppercase text-bold">checkout</h2>
    	<hr class="small-line">
		<div class="row">
			<div class="container-f col-sm-4" style="">
			   	<div>
			   		<?php 
			   			$con=mysqli_connect('localhost','root','','medimates');
			   			$qqq=mysqli_query($con,"select * from user where customer_id='".$_SESSION['cid']."'");
			   			$rrr=mysqli_fetch_assoc($qqq);
			   		?>
			   		<div class="card ">
				   		<h3 class="text-center">Add New Address</h3>
			   			<div class="card-body ">
			   				<form method="post" action="">
				   					<div class="row">
				   						<div class="col-md-1"></div>
				   						<div class="col-md-10">
				   						<textarea placeholder="Flat Number, Building Name, Street/Locality" class="form-control" rows="3" name="street1" draggable="false"><?php echo $rrr['Address'];?></textarea>
				   						</div>	
				   					</div>
				   					</br>
				   					<!-- <div class="row">
				   						<div class="col-md-1"></div>
				   						<div class="col-md-10">
				   						<input type="text" placeholder="Landmark (optional)" class="form-control" name="lmark" value="">
				   						</div>	
				   					</div> -->
				   					<br>
				   					<div class="row">
				   						<div class="col-md-1"></div>
				   						<div class="col-md-10">
				   						<input type="text" placeholder="Pincode" class="form-control" name="pincode" value="<?php echo $rrr['Pcode']; ?>">
				   						</div>	
				   					</div>
				   					<br>
				   					<div class="row">
				   						<div class="col-md-1"></div>
				   						<div class="col-md-10">
				   						<input type="text" placeholder="Locality" name="country" value="<?php echo $rrr['Country']; ?>" class="form-control">
				   						</div>	
				   					</div>
				   					<br>
				   					<div class="row">
				   						<div class="col-md-1"></div>
				   						<div class="col-md-10">
				   						<input type="text" name="city" value="<?php echo $rrr['City']; ?>" placeholder="City" class="form-control">
				   						</div>	
				   					</div>
				   					<br>
				   					<div class="row">
				   						<div class="col-md-1"></div>
				   						<div class="col-md-10">
				   						<input type="text" name="state" value="<?php echo $rrr['State']; ?>" placeholder="state" class="form-control" >
				   						</div>	
				   					</div>
				   					<br>
				   					<!-- <div class="row">
				   						<div class="col-md-1"></div>
				   						<div class="col-md-10">
				   						<input type="text" name="name" placeholder="customer name" class="form-control" value="<?php echo $rrr['Fname'],$rrr['Lname'];?>">
				   						</div>	
				   					</div> -->
				   					<br>
				   					<div class="row">
				   						<div class="col-md-1"></div>
				   						<div class="col-md-10">
				   						<input type="text" name="phno" placeholder=" 10 DIGIT Mobile Number" value="<?php echo $rrr['Mobile']; ?>" class="form-control">
				   						</div>	
				   					</div>
				   					<div class="row" style="margin: 10px;">
				   						<div class="col-md-4"></div>
				   						<div class="col-md-3">
				   							<div class="btn1">
<!-- <input type="button" name="submit" value="SAVE" class="btn btn-info form-control Show" >
</input>-->
 <input type="submit" name="save" value="SAVE" class="btn btn-info form-control Show" >
</input>


				   							</div>
				   						</div>
				   					</div>
			   					</form>
			   					<?php
if(isset($_POST['save']))
{

$street1=$_POST['street1'];
$lmark=$_POST['lmark'];
$pcode=$_POST['pincode'];
$country=$_POST['country'];
$city=$_POST['city'];
$state=$_POST['state'];

$phno=$_POST['phno'];
$cid=$_SESSION['cid'];

$link=mysqli_connect('localhost','root','','medimates');
$qs=mysqli_query($link,"select * from tbladd where customer_id='$cid'");

$count =  mysqli_num_rows($qs);
		if($count!=0)
		{

			$upq="update tbladd set address='$street1',landmark='$lmark',pincode='$pcode',country='$country',city='$city',state='$state',mobile='$phno' where customer_id='$cid' )";

		//	echo "update tbladd set address='$street1',landmark='$lmark',pincode='$pcode',country='$country',city='$city',state='$state',mobile='$phno' where customer_id='$cid' )";
			$up=mysqli_query($link,$upq);
			echo "<script>alert('updated');</script>";
		}
		else
		{
			
			$insert=mysqli_query($link,"insert into tbladd values('','$cid','$lmark','$pcode','$country','$city','
				$state','$street1','$phno')");
			echo "inserted";
		}
}
?>	
			   			</div>
			   		</div>
			   	</div>
			</div>
			<form method="post" action="">
			<div class="col-sm-2"></div>
			<div class="col-sm-4" id="target" >
					 <?php
						if (isset($_SESSION['cid']))
						{
							
							$con=mysqli_connect('localhost','root','','medimates');
							$q=mysqli_query($con,"select addtocart.*,product.product_name from addtocart INNER JOIN product ON addtocart.product_id=product.product_id where addtocart.customer_id='".$_SESSION['email']."'");
						}
						
						?>
						<div class="card" style="padding: 20px;" >
							<h3 class>Your  Address</h3>
							<div>
								<?php 
										$query=mysqli_query($con,"select * from tbladd,user where tbladd.customer_id=user.customer_id and tbladd.customer_id='".$_SESSION['cid']."'");
										$ans=mysqli_fetch_assoc($query);
									?>
								<p>
									<span><?php echo $ans['Fname'];?></span><br>
									<span><?php echo $ans['address']; 
											?></span><br>
									<span><?php  
												echo $ans['pincode']; 
											?></span><br>
									<span><?php  
										echo $ans['city'];
									?></span>
								</p>
							</div>
							<h3 class>Bill</h3>
							<div>
								<table border="1">
									<tr>
										<th><b>Product Name:</b></th>
										<th><b>Product price:</b></th>
										<th><b>Product Qunatity:</b></th>
										<th><b>Sub Total:</b></th>
									</tr>
									<?php $item=0;
									while($dp=mysqli_fetch_assoc($q))
									{
										$item=$item+1;
									?>
									<tr>
										<td class="text-center"><?php echo $dp['product_name'];?></td>
										<td class="text-center"><i class="fa fa-inr"></i><?php echo $dp['selling_price'];?></td>
										<td class="text-center"><?php echo $dp['product_quantity'];?></td>
										<td class="text-center"><?php $sp=$dp['selling_price'];
										$pqty=$dp['product_quantity']; $tam[]= $sp*$pqty; 
										echo $pricee=$sp*$pqty;?></td>
									</tr>
								<?php }

								?>

								</table>
								<br>
								<span><b>Your Total Amount To be Paid :<i class="fa fa-inr"></i></b> <?php echo $ff=array_sum($tam); ?>  </span>
								<?php 
									$user=mysqli_query($con,"select * from user where Email='".$_SESSION['email']."'");
									$r=mysqli_fetch_assoc($user);
								?>
			<!-- 					<a href="insta/test.php?total=<?php ///echo array_sum($tam);?>&&Name=<?php //echo $r['Fname'];?>&&phno=<?php// echo $r['Mobile'];?>&&email=<?php// echo $r['Email']; ?>">
									<input class="btn btn-default" style="float: right;" type="button" name="payment" id="payment" value="payment"></a> -->
							</div>
 <form method="post">
							 <input type="submit" name="insert" value="Place order" class="btn btn-default" ></input>
							</form>
				<?php
					if(isset($_POST['insert']))
					{

					$order_no=uniqid();
					$cid=$_SESSION['cid'];
					$paymentstatus='case on delivery';
					$orderdate=date('d m y');
					$deliverydate=date('d m y');
					$orderstatus='recevied';
					$unitprize=$ff;
					$link=mysqli_connect('localhost','root','','medimates');
					$qs=mysqli_query($link,"select * from tbladd where customer_id='$cid'");

					$count =  mysqli_num_rows($qs);
					
					if($count!=0)
					{
						// echo "INSERT INTO `order_details`(`order_id`, `order_no`, `total_item`, `customer_id`, `created_date`, `updated_date`, `payment_status`, `order_date`, `delivery_date`, `order_status`, `unitprice`) VALUES ([],[$order_no],[$item],[$cid],[],[],
						// 	[$paymentstatus],[$orderdate],[$deliverydate],[$orderstatus],[$unitprize])";exit();
						// $insert=mysqli_query($link,"INSERT INTO `order_details`(`order_id`, `order_no`, `total_item`, `customer_id`, `created_date`, `updated_date`, `payment_status`, `order_date`, `delivery_date`, `order_status`, `unitprice`) VALUES ([],[$order_no],[$item],[$cid],[],[],
						// 	[$paymentstatus],[$orderdate],[$deliverydate],[$orderstatus],[$unitprize])");
						$qrry="insert into order_details (`order_no`, `total_item`, `customer_id`, `payment_status`, `order_date`, `delivery_date`, `order_status`, `unitprice`) values('$order_no','$item','$cid','$paymentstatus','$orderdate','$deliverydate','$orderstatus','$unitprize')";

						$insert=mysqli_query($link,"insert into order_details values('','$order_no','$item','$cid',
							'$paymentstatus','$orderdate','$deliverydate','$orderstatus','$unitprize')");
							mysqli_query($link,$qrry);
							$inst_itm="insert into checkout_items (select * from addtocart)";
							mysqli_query($link,$inst_itm);
							$sel_order=mysqli_query($link,"select order_id from order_details order by order_id DESC limit 1");
							$fetch_orderid=mysqli_fetch_assoc($sel_order);
							echo $od_id=$fetch_orderid['order_id'];
							echo $user=$_SESSION['email'];
							mysqli_query($link,"update checkout_items set order_id='$od_id' where customer_id='$user'");
						mysqli_query($link,"delete from addtocart where customer_id='$user'");
						//header('location:thankyou.php');
						echo "<script>window.location='thankyou.php'</script>";
								}
					else
					{
						echo "error";

					}	
				}
?>	
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
</div>
<script>
var preloader=document.getElementById('loading');

function myfunction()
{
preloader.style.display='none';
}
</script>
</body>
</html> 	
<script type="text/javascript">
	$('.Show').click(function() {
    $('#target').show(500);
  /*  $('.Show').hide(0);*/
    $('.Hide').show(0);
});
$('.Hide').click(function() {
    $('#target').hide(500);
    $('.Show').show(0);
    $('.Hide').hide(0);
});

</script>