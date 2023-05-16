<?php 
$cn=mysqli_connect('localhost','root','','medimates');
$get_order=mysqli_query($cn,"select user.*,tbladd.*,order_details.* from user INNER JOIN order_details ON user.customer_id=order_details.customer_id INNER JOIN tbladd ON user.customer_id=tbladd.customer_id where order_details.order_id='".$_REQUEST['invoice_id']."'");
$row=mysqli_fetch_assoc($get_order);
///print_r($row);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
	
	<title>Invoice</title>
	
	<link rel='stylesheet' type='text/css' href='css/style.css' />
	<link rel='stylesheet' type='text/css' href='css/print.css' media="print" />
	<script type='text/javascript' src='js/jquery-1.3.2.min.js'></script>
	<script type='text/javascript' src='js/example.js'></script>

</head>

<body onload="window.print()">

	<div id="page-wrap">

		<div id="header">SALES INVOICE</div>
		
		<div id="identity">
		
            <div id="address">
            	
            	<?php echo $row['Address']."</br> ". $row['City']."</br> ". $row['Pcode']."</br> ". $row['state']."</br> ". $row['country'];?>

            </div>

            <div id="logo">


              <div id="logohelp">
                <input id="imageloc" type="text" size="50" value="" /><br />
                (max width: 540px, max height: 100px)
              </div>
             <h1>Medimates</h1>
            </div>
		
		</div>
		
		<div style="clear:both"></div>
		
		<div id="customer">

            <div id="customer-title"><?php echo $row['Fname']." ". $row['Lname'];?></div>

            <table id="meta">
                <tr>
                    <td class="meta-head">Invoice #</td>
                    <td><div><?php echo $row['order_id'];?></div></td>
                </tr>
                <tr>

                    <td class="meta-head">Date</td>
                    <td><div id="date"><?php echo $row['created_date'];?></div></td>
                </tr>
                <tr>
                    <td class="meta-head">Amount Due</td>
                    <td><div class="due"><?php echo "Rs ".$row['unitprice'];?></div></td>
                </tr>

            </table>
		
		</div>
		
		<table id="items">
		
		  <tr>
		      <th>Product_name</th>
		      <th>Product By</th>
		      <th>Unit Cost</th>
		      <th>Quantity</th>
		      <th>Price</th>
		  </tr>
		  <?php 
		  //echo "select * from checkout_items where order_id='".$row['order_id']."'";
		  $qry=mysqli_query($cn,"select checkout_items.*,product.* from checkout_items INNER JOIN product ON checkout_items.product_id=product.product_id where order_id='".$row['order_id']."'");
		  while($p=mysqli_fetch_assoc($qry))
		  {
		  ?>
		  <tr class="item-row">
		      <td class="item-name"><div class="delete-wpr"><div><?php echo $p['product_name'];?></div>
		      </div></td>
		      <td class="description"><div>  <?php echo $p['product_by'];?>  </div></td>
		      <td><div class="cost"> <?php echo $p['selling_price'];?></div></td>
		      <td><div class="qty"> <?php echo $p['product_quantity'];?></div></td>
		      <td><span class="price"> <?php echo $p['selling_price'] * $p['product_quantity'] ;?></span></td>
		  </tr>
		  <?php }?>




<!-- 
		  <tr>
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Subtotal</td>
		      <td class="total-value"><div id="subtotal">$875.00</div></td>
		  </tr>
 -->		  <tr>

		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Total</td>
		      <td class="total-value"><div id="total"><?php echo $row['unitprice'];?></div></td>
		  </tr>
		  <tr>
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Mode</td>

		      <td class="total-value"><div id="paid"><?php echo $row['payment_status'];?></div></td>
		  </tr><!-- 
		  <tr>
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line balance">Balance Due</td>
		      <td class="total-value balance"><div class="due">$875.00</div></td>
		  </tr> -->
		
		</table>
		
		<div id="terms">
		  <h5>Terms</h5>
		  <div>NET 30 Days. Finance Charge of 1.5% will be made on unpaid balances after 30 days.</div>
		</div>
	
	</div>
	
</body>

</html>