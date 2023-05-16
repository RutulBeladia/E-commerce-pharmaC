<?php
if(isset($_POST['submit']))
{
$email=$_POST['email'];
$password=$_POST['password'];
$cn=mysqli_connect("localhost","root","","medimates");
$q=mysqli_query($cn,"select * from user where Email='$email'");
$num_rows=mysqli_num_rows($q);

if($num_rows==0)
{
		echo "<script> alert('data not found');window.location='newpass.php';</script>";
}	
else
{
		mysqli_query($cn,"update user set Password='$password' where Email='$email'")	;
		echo "<script> alert('password update');window.location='login.php';</script>";
}
}
?>