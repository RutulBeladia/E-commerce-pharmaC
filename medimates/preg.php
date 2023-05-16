<?php
$name=ucwords($_POST['name']);
$phone=$_POST['phno'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$imgprofile=$_FILES['img']['name'];
$imgtmpname=$_FILES['img']['tmp_name'];
$fileupload= "profile/".$imgprofile;


global $flag;
$flag=1;

$con=mysqli_connect('localhost','root','','medimates');
if($flag==1)
{
	$query=mysqli_query($con,"insert into aregistration values('','$name','$fileupload','$phone','$email','$pass')");
	if($query)
	{
		move_uploaded_file($imgtmpname,$fileupload);
		echo "<script>alert('record successfully inserted');window.location='login.php'</script>";
	}
	else
	{
		echo mysqli_error($con);
	}
}
else
{
	echo "somthing went wrong";
}
?>