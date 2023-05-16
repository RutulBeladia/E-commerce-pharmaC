<?php
if($_REQUEST['payment_status']=='Failed')
{
	echo 'Invalid Card <br/>';
	echo 'Payment Ref ID'.$_REQUEST['payment_request_id'];
}
else 	
{

}


if(isset($_REQUEST['buynow']))
{
$product_name='Neel';

$price=$_REQUEST['price'];
$email='neelgupta701@gmail.com';

header("location:test.php?Pro_name=".$product_name.'&&'.'Price='.$price);
}

if(isset($_REQUEST['buynoww']))
{
$product_name='Neel';

$price=$_REQUEST['pricee'];
$email='neelgupta701@gmail.com';

header("location:test.php?Pro_name=".$product_name.'&&'.'Price='.$price);
}

if(isset($_REQUEST['buynowww']))
{
$product_name='Neel';

$price=$_REQUEST['priceee'];
$email='neelgupta701@gmail.com';

header("location:test.php?Pro_name=".$product_name.'&&'.'Price='.$price);
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>products</title>
</head>
<body>
<form method="post" >
<div style="height: 120px;width: 200px;border:groove;float: left;">
<h1> Tshirt</h1>

<input type="hidden" Value="500" name="price">
Price 500
<input type="submit" name="buynow">
</div>



<div style="height: 120px;width: 200px;border:groove;float: left;">
<h1> Tshirt</h1>

<input type="hidden" Value="1500" name="pricee">
Price 1500
<input type="submit" name="buynoww">
</div>


<div style="height: 120px;width: 200px;border:groove;float: left;">
<h1> Tshirt</h1>

<input type="hidden" Value="200" name="priceee">
Price 200
<input type="submit" name="buynoww">
</div>
</form>

</body>
</html>