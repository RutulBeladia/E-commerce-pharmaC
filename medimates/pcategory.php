<?php
if(isset($_POST['btnadd']))
{
$cate=$_POST['cate'];
$pname=$_POST['pname'];
$status=$_POST['status'];
$imgname=$_FILES['img']['name'];
$imgtmpname=$_FILES['img']['tmp_name'];
$fileupload= "category/".$imgname;

$cn=mysqli_connect('localhost','root','','medimates');
$q=mysqli_query($cn,"insert into category values('','$cate','$pname','$fileupload','$status')") or die(mysqli_error($cn));
if($q)
{
	//header("location:add_product.php");
	move_uploaded_file($imgtmpname,$fileupload);
	echo "<script>alert('record inserted');window.location='category.php';</script>";
}
else
{
	echo "<script>alert('record not inserted');window.location='category.php';</script>";
}
}
?>