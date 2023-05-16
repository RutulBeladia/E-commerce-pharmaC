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
					//	header('location:thankyou.php');
								}
					else
					{
						echo "error";

					}	
				}
?>	