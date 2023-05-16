<?php
	$con=mysqli_connect('localhost','root','','medimates');
session_start();
if(isset($_REQUEST['action']))
{ 
	if($_REQUEST['action']=='addtocart')
	{
		$product_id=$_REQUEST['prodcut_id'];
		$qty=$_REQUEST['qty'];
		$user=$_SESSION['email'];
		$selling=$_REQUEST['selling_price'];
		$sel=mysqli_query($con,"select * from addtocart where product_id='$product_id'");

		if(mysqli_num_rows($sel)>0)
		{ 

			$det=mysqli_fetch_assoc($sel);
			echo $newqty=$det['product_quantity']+1;
			mysqli_query($con,"update addtocart set product_quantity='$newqty' where product_id='$product_id'");
			header('location:home.php?addedincart');
		}
		else
		{


		echo $qry="insert into addtocart values('','$product_id','$user','$qty','$selling','added')";
		mysqli_query($con,$qry);

		$chekqty=mysqli_query($con,"select * from product where product_id='$product_id'");
		$feqty=mysqli_fetch_assoc($chekqty);
		$total_qty=$feqty['total_product_quantity'];
		$new_tot_qty=$total_qty-$qty;
		mysqli_query($con,"update product  set total_product_quantity='$new_tot_qty' where product_id='$product_id'");



	//	echo "insert into addtocart values('','$product_id','$user','$qty','selling','added')";
		
		header('location:home.php?addedincart');
		} 
	}
}


?>