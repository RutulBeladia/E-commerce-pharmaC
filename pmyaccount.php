<?php
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$mobile=$_POST['phno'];
$add=$_POST['street1'];
$city=$_POST['city'];
$pcode=$_POST['pincode'];
$pwd=$_POST['pass'];
$country=$_POST['country'];
$state=$_POST['state'];

$cn=mysqli_connect('localhost','root','','medimates');
$update=mysqli_query($cn,"update user set Fname='$fname',Lname='$lname',Email='$email',Mobile='$mobile',Address='$add',City='$city',Pcode='$pcode',Password='$pwd',Country='$country',State='$state' where Fname='$fname'") or die(mysqli_error($update));
	if($update)
	{
		echo "<script>alert('update Successfull');window.location.href='account.php';</script>";
	}
	else
	{
		echo "<script>alert('Profile Not Updated');window.location.href='account.php';</script>";
	}

?>