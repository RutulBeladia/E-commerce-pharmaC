<?php 
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$msg=$_POST['msg'];

$cn=mysqli_connect('localhost','root','','medimates');
$query=mysqli_query($cn,"insert into contactus values('','$name','$phone','email','msg')");
if($query)
{
	echo "<script>alert('your query Sent');window.location.href='home.php'</script>";
}
else
{
	echo "<script>alert('sorry');</script>";
}
}
?>