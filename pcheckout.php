<?php
if(isset($_POST['submit']))
{
$street1=$_POST['street1'];
/*$lmark=$_POST['lmark'];*/
$pcode=$_POST['pincode'];
$country=$_POST['country'];
$city=$_POST['city'];
$state=$_POST['state'];
$name=$_POST['name'];
$phno=$_POST['phno'];

$link=mysqli_connect('localhost','root','','medimates');
$insert=mysqli_query($link,"insert into tbladd values('','$street1','$pcode','$country','$city','$state','$name','$phno')");
	if ($insert)
	 {
		echo "<script>window.location.href='checkout.php';</script>";
	}
	else
	{
		echo "<script>alert('record not inserted');windows.location.href='checkout.php';</script>";
	}
}
?>