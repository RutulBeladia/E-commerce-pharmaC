<?php
if(isset($_POST['btnadd']))
{
$cate=$_POST['cate'];
$subcate=$_POST['subcate'];
$status=$_POST['status'];

$cn=mysqli_connect('localhost','root','','medimates');
$q=mysqli_query($cn,"insert into sub_category values('','$cate','$subcate','$status')") or die(mysqli_error($cn));
if($q)
{
	echo "<script>alert('record inserted');window.location='sub_category.php';</script>";
}
else
{
	echo "<script>alert('record not inserted');window.location='sub_category.php';</script>";
}
}
?>