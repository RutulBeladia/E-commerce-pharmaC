<?php
if(isset($_POST['btnadd']))
{
$mcate=$_POST['category'];
$cate=$_POST['cate'];
$subcate=$_POST['subcate'];
$pname=$_POST['name'];
$pqty=$_POST['qty'];
$pby=$_POST['pro_by'];
$stock=$_POST['stk'];
$sell=$_POST['sellprice'];
$price=$_POST['netprice'];
$desc=$_POST['description'];
$imgname=$_FILES['img']['name'];
$imgtmpname=$_FILES['img']['tmp_name'];
$fileupload= "upload/".$imgname;

$cn=mysqli_connect('localhost','root','','medimates');
$q=mysqli_query($cn,"insert into product values('','$mcate','$cate','$subcate','$pname','$fileupload','$pqty','$pby','$stock','$sell','$price','$desc')") or die(mysqli_error($cn));
if($q)
{
	//header("location:add_product.php");
	move_uploaded_file($imgtmpname,$fileupload);
	echo "<script>alert('record inserted');window.location='add_product.php';</script>";
}
else
{
	echo "<script>alert('record not inserted');window.location='add_product.php';</script>";
}
}
?>