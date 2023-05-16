<?php 
$cn=mysqli_connect('localhost','root','','medimates');
if(isset($_REQUEST['delpri']))
{
$id=$_REQUEST['delpri'];
mysqli_query($cn,"delete from prescription where Pid='$id'");
header('location:mypriscription.php');
}


?>