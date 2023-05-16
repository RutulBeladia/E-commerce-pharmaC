<?php

$email=$_POST['email'];
$squ=$_POST['squ'];
$answer=$_POST['ans'];

$cn=mysqli_connect("localhost","root","","medimates");

$qry=mysqli_query($cn,"select * from user where Email='$email' and Question='$squ' and Answer='$answer'");
$num_rows=mysqli_num_rows($qry);
if($num_rows==0)
{		

	 echo "<script> alert('invalid answer');window.location='forget.php';</script>";

}	
while($result=mysqli_fetch_array($qry))
{

	if($email==$result['Email'] && $squ==$result['Question'] && $answer==$result['Answer'])
	{
		session_start();
		$_SESSION['email']=$email;
		echo "<script> alert('you can change your password');window.location='newpass.php';</script>";
	}
}
?>