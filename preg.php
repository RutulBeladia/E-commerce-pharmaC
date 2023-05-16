<?php

$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$email=$_POST['email'];
$mobile=$_POST['telephone'];
$add=$_POST['address_1'];
$city=$_POST['city'];
$pcode=$_POST['postcode'];
$country=$_POST['country_id'];
$state=$_POST['zone_id'];
$pass=$_POST['password'];
$squestion=$_POST['squ'];
$answer=$_POST['answer'];

$cn=mysqli_connect('localhost','root','','medimates');

$q=mysqli_query($cn,"insert into user values('','$fname','$lname','$email','$mobile','$add','$city','$pcode','$country','state','$pass','$squestion','$answer')");
if($q)
{
	echo "<script>alert ('data insert successfully');
	window.location='login.php';</script>";
}
else
{
	echo "<script>alert ('You can login now');
	window.location='registration.php';</script>";
}

?>