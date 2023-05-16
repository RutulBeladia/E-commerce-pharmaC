<?php
$cname=$_POST['cname'];
$city=$_POST['city'];
$desc=$_POST['desc'];
$imgname=$_FILES['file']['name'];
$imgtype=$_FILES['file']['type'];
$imgsize=$_FILES['file']['size'];
$imgtmpname=$_FILES['file']['tmp_name'];
$fileupload= "logo/".$imgname;

$cn=mysqli_connect('localhost','root','','medimates');


$insert=mysqli_query($cn,"insert into product_by values('','$cname','$city','$fileupload','$desc')");
if($insert)
{
  move_uploaded_file($imgtmpname,$fileupload);
  echo "<script>alert('record inserted');window.location='product_by.php';</script>";
}
else
{
  echo "<script>alert('record not inserted');window.location='product_by.php';</script>";
}
?>