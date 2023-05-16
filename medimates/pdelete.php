<?php
$cntry=$_POST['cntry'];
$con=mysqli_connect('localhost','root','','medimates');
mysqli_query($con,"delete from tblcountry where Country='$cntry");
header("Location: country.php");
?> 